<?php

namespace App\Managers;

use App\Models\Hex;
use App\Yields\ActualYields;
use App\Yields\YieldsChanges;

class HexManager
{
    public static function getYields(Hex $hex): ActualYields
    {
        $yieldTypes = array_merge(
            $hex->biome->yields ?? [],
            $hex->city->yields ?? [],
            $hex->feature->yields ?? [],
            $hex->landscape->yields ?? [],
            $hex->resource->yields ?? [],
            $hex->units->yields ?? []
        );

        $yieldsChanges = new YieldsChanges($yieldTypes);

        $yields = new ActualYields();
        $yields->withChanges($yieldsChanges);
        return $yields;
    }
}
