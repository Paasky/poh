<?php

namespace App\Managers;

use App\Models\Citizen;
use App\Models\Hex;
use App\Yields\ActualYields;
use App\Yields\YieldsChanges;

class CitizenManager
{
    public static function getYields(Citizen $citizen): ActualYields
    {
        $yieldTypes = [
            new \App\Models\Types\Yields([
                'is_local' => true,
                'food' => -1,
            ]),
        ];

        if ($citizen->hex) {
            $yieldTypes = array_merge($yieldTypes, HexManager::getYields($citizen->hex));
        }

        $yieldsChanges = new YieldsChanges($yieldTypes);

        $yieldTypes = new ActualYields();
        $yieldTypes->withChanges($yieldsChanges);
        return $yieldTypes;
    }
}
