<?php

namespace App\Managers;

use App\Models\Player;

class PlayerManager
{
    public static function newTurn(Player $player): void
    {
        $researchPoints = static::getResearchPoints($player);
        foreach ($player->knowTechnologies->where('under_research', true) as $tech) {
            TechManager::doResearch($tech, $researchPoints);
        }

        foreach ($player->cities as $city) {
            CityManager::newTurn($city);
        }

        foreach ($player->units as $unit) {
            UnitManager::newTurn($unit);
        }
    }

    public static function getResearchPoints(Player $player): float
    {
        $points = 0;
        foreach ($player->cities as $city) {
            $points += CityManager::getResearchPoints($city);
        }
        return round($points, 2);
    }
}
