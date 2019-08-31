<?php

namespace App\Managers;

use App\Models\City;
use App\Models\Hex;
use App\Models\Types\Yields;
use App\Yields\ActualYields;
use App\Yields\YieldsChanges;

class CityManager
{
    /**
     * @param City $city
     * @return Yields[]
     */
    public static function getYields(City $city): array
    {
        $yieldTypes = [];

        // citizens (& hexes they work in)
        foreach($city->citizens as $citizen) {
            $yieldTypes = array_merge($yieldTypes, CitizenManager::getYields($citizen));
        }

        // buildings
        foreach ($city->buildings as $building) {
            $yieldTypes = array_merge($yieldTypes, $building->type->yields);
        }

        // dependent units
        foreach ($city->dependentUnits as $unit) {
            $yieldTypes = array_merge($yieldTypes, UnitManager::getSupplyYields($unit));
        }

        return $yieldTypes;
    }

    public static function newTurn(City $city): void
    {
        // defense

        // growth

        // politics

        // construction

    }
}
