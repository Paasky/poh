<?php

namespace App\Managers;

use App\KnownTechnology;
use App\Messages\DiscoveredTechMessage;
use App\Messages\KnowAboutTechMessage;
use App\Messages\Messages;
use App\Models\Player;
use App\Models\Types\Technology;

class TechManager
{
    public static function doResearch(KnownTechnology $tech, float &$researchPoints): void
    {
        if (!$tech->under_research) {
            return;
        }

        $pointsForTech = round($researchPoints * $tech->research_percent / 100, 2);
        $tech->points = round($tech->points + $pointsForTech, 2);
        $researchPoints = round($researchPoints - $pointsForTech, 2);

        if ($tech->points >= $tech->type->cost) {
            $overflow = $tech->points - $tech->type->cost;
            $researchPoints = round($researchPoints + $overflow, 2);

            $tech->under_research = false;
            $tech->is_known = true;
            $tech->points = $tech->type->cost;
            Messages::create(new DiscoveredTechMessage($tech));
        }

        $tech->save();
    }

    public static function give(Technology $techType, Player $player): KnownTechnology
    {
        if (!$knownTech = $player->knownTechnologies->firstWhere('type_id', $techType->id)) {
            $knownTech = static::generate($techType, $player);
        }
        $knownTech->under_research = false;
        $knownTech->is_known = true;
        $knownTech->points = $techType->cost;
        $knownTech->save();
        Messages::create(new DiscoveredTechMessage($knownTech));
        return $knownTech;
    }

    public static function generate(Technology $techType, Player $player): KnownTechnology
    {
        $tech = KnownTechnology::create([
            'type_id' => $techType->id,
            'type_model' => Technology::class,
            'player_id' => $player->id,
        ]);

        Messages::create(new KnowAboutTechMessage($tech));
        return $tech;
    }
}
