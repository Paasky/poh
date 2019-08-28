<?php

namespace App\Moves;

use App\Models\City;
use App\Models\PohModel;
use App\Models\Types\Ability;
use App\Models\Types\Biome;
use App\Models\Types\CityType;
use App\Models\Types\DistrictType;
use App\Models\Types\EventType;
use App\Models\Types\Feature;
use App\Models\Types\Landscape;
use App\Models\Types\Terrain;
use Illuminate\Support\Collection;

class MoveCostChanges
{
    const TYPE_BIOME = Biome::class;
    const TYPE_TERRAIN = Terrain::class;
    const TYPE_LANDSCAPE = Landscape::class;
    const TYPE_FEATURE = Feature::class;
    const TYPE_CITY = CityType::class;
    const TYPE_DISTRICT = DistrictType::class;
    const TYPE_EVENT = EventType::class;
    const TYPE_RIVER = 'river';

    const MODE_LOCAL = 'local';
    const MODE_GLOBAL = 'global';

    private $values = [];

    private $forType = '';
    private $forTypeId = 0;


    /**
     * MoveCostChanges constructor.
     * @param Collection|Ability[] $abilities
     */
    public function __construct(Collection $abilities)
    {
        foreach ($abilities as $ability) {
            switch ($ability->ability) {
                default:
                    $this->forType = '';
            }

            if (!$this->forType) {
                continue;
            }

            if (!isset($this->values[$this->forType][$this->forTypeId])) {
                $this->values[$this->forType][$this->forTypeId] = 0;
            }

            $this->values[$this->forType][$this->forTypeId] = round($this->values[$this->forType][$this->forTypeId] + $ability->effect, 2);
        }
    }

    public function getValue(string $type, string $mode, int $typeId = null): float
    {
        return $this->values[$type][$typeId ?: 'all'] ?? 0;
    }
}
