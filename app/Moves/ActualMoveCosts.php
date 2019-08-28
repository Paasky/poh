<?php


namespace App\Moves;


use App\Managers\HexManager;
use App\Models\Hex;

class ActualMoveCosts
{
    /** @var MoveCostChanges  */
    private $changes;

    public function __construct(MoveCostChanges $changes)
    {
        $this->changes = $changes;
    }

    public function getCost(Hex $from, Hex $to): float
    {
        $types = [
            [MoveCostChanges::TYPE_BIOME => $to->biome_id],
            [MoveCostChanges::TYPE_TERRAIN => $to->terrain_id],
            [MoveCostChanges::TYPE_LANDSCAPE => $to->landscape_id],
        ];

        if ($to->feature_id) {
            $types[] = [MoveCostChanges::TYPE_FEATURE => $to->feature_id];
        }

        if ($to->city_id) {
            $types[] = [MoveCostChanges::TYPE_CITY => $to->city->type_id];
        }

        if ($to->district_id) {
            $types[] = [MoveCostChanges::TYPE_DISTRICT => $to->district->type_id];
        }

        if ($to->events) {
            foreach ($to->events as $event) {
                $types[] = [MoveCostChanges::TYPE_EVENT => $event->type_id];
            }
        }
        if (HexManager::isRiverBetween($from, $to)) {
            $types[] = [MoveCostChanges::TYPE_RIVER => null];
        }

        $value = 0;

        foreach ($types as $typeData) {
            $type = array_key_first($typeData);
            $value += $this->changes->getValue($type, MoveCostChanges::MODE_GLOBAL, $typeData[$type]);
            $value += $this->changes->getValue($type, MoveCostChanges::MODE_LOCAL, $typeData[$type]);
        }

        return round($value, 2);
    }
}
