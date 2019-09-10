<?php

namespace App\Managers;

use App\Exceptions\PlayerIsHumanException;
use App\Models\Player;

class PlayerManager
{
    public static function nextTurn(Player $player): void
    {
        $researchPoints = static::getResearchPoints($player);
        foreach ($player->knowTechnologies->where('under_research', true) as $tech) {
            TechManager::doResearch($tech, $researchPoints);
        }
        foreach ($player->units as $unit) {
            UnitManager::nextTurn($unit);
        }
        foreach ($player->cities as $city) {
            CityManager::nextTurn($city);
        }
        if (!$player->is_ai) {
            throw new PlayerIsHumanException($player);
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
