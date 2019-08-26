<?php

namespace App\Managers;

use App\Models\City;
use App\Models\Hex;
use App\Yields\ActualYields;
use App\Yields\YieldsChanges;

class CityManager
{
    public static function getYields(City $city): ActualYields
    {
        $yieldTypes = [];

        // citizens
        foreach($city->citizens as $citizen) {
            $yieldTypes = array_merge($yieldTypes, CitizenManager::getYields($citizen));
        }

        // buildings
        foreach ($city->buildings as $building) {
            $yieldTypes = array_merge($yieldTypes, $building->type->yields);
        }

        // dependant units
        foreach ($city->depandentUnits as $unit) {
            $yieldTypes = array_merge($yieldTypes, UnitManager::getSupplyYields($unit));
        }

        return new ActualYields(new YieldsChanges($yieldTypes));
    }
}
