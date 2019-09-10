<?php

namespace App\Managers;

use App\Models\KnownTechnology;
use App\Messages\TechResearchCompleteMessage;
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

        $tech->points = round($tech->points + $researchPoints, 2);
        $researchPoints = 0;

        if ($tech->points >= $tech->type->cost) {
            $researchPoints = round($tech->points - $tech->type->cost, 2);
            static::researchComplete($tech);
        }

        $tech->save();
    }

    public static function give(Technology $techType, Player $player): KnownTechnology
    {

        if (!$knownTech = $player->knownTechnologies->firstWhere('type_id', $techType->id)) {
            $knownTech = static::generate($techType, $player, false);
        }
        static::researchComplete($knownTech);
        return $knownTech;
    }

    public static function researchComplete(KnownTechnology $tech): void
    {
        $tech->under_research = false;
        $tech->is_known = true;
        $tech->points = $tech->type->cost;
        $tech->save();
        Messages::create(new TechResearchCompleteMessage($tech));
    }

    public static function generate(Technology $techType, Player $player, bool $notify = true): KnownTechnology
    {
        $tech = KnownTechnology::create([
            'type_id' => $techType->id,
            'type_model' => Technology::class,
            'player_id' => $player->id,
        ]);

        if ($notify) {
            Messages::create(new KnowAboutTechMessage($tech));
        }
        return $tech;
    }
}
