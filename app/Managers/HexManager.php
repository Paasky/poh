<?php

namespace App\Managers;

use App\Exceptions\ImpossibleException;
use App\Models\Hex;
use App\Models\Map;

use App\Yields\ActualYields;
use App\Yields\YieldsChanges;
use Illuminate\Support\Collection;

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

        return new ActualYields(new YieldsChanges($yieldTypes));
    }

    public static function inCoords(int $x, int $y, Map $map): ?Hex
    {
        $x = static::trueX($x, $y, $map);
        $y = static::trueY($y, $map);
        if ($x === null || $y === null) {
            return null;
        }

        return $map->hex($x, $y);
    }

    /**
     * @param Hex $hex
     * @param int $range
     * @return Collection|Hex[]
     */
    public static function inRange(Hex $hex, int $range): Collection
    {

    }

    public static function getDistance(Hex $from, Hex $to): int
    {

    }

    private static function trueX(int $x, int $y, Map $map): ?int
    {
        if ($x >= 0 && $x <= $map->width) {
            return $x;
        }

        if (!$map->allowWrap) {
            return null;
        }

        // Excess x coords given
        $excess = $x % $map->width;

        // positive, wrap rightwards (-1 = begin at 0)
        if ($excess > 0) {
            return $excess -1;
        }

        // negative, wrap leftwards (+1 = begin at 0)
        if ($excess < 0) {
            return $map->width + $excess +1;
        }

        return ;
    }

    private static function trueY(int $y, Map $map): ?int
    {
        switch ($map->type) {
            case Map::TYPE_GLOBE:
                if (abs($y) > ($map->height - 1) / 2) {
                    return null;
                }

                return $y;

            case Map::TYPE_FLAT:
                if ($y < 0 || $y > $map->height) {
                    return null;
                }
                return $y;

            default:
                throw new ImpossibleException(
                    "Invalid map data",
                    "Map [$map->id] has invalid type: $map->type"
                );
        }
    }
}
