<?php

namespace database\seeds\data;
use App\Models\Types\Biome;

class Biomes
{
    const MODEL = Biome::class;
    const DATA = [
        [
            'id' => 1,
            'title' => 'Arctic',
            'color' => 'light-blue',
        ],
        [
            'id' => 2,
            'title' => 'Sub-Arctic',
            'color' => 'light-gray',
        ],
        [
            'id' => 3,
            'title' => 'Temperate',
            'color' => 'army-green',
        ],
        [
            'id' => 4,
            'title' => 'Continental',
            'color' => 'light-green',
        ],
        [
            'id' => 5,
            'title' => 'Sub-Tropic',
            'color' => 'pear',
        ],
        [
            'id' => 6,
            'title' => 'Arid',
            'color' => 'golden-yellow',
        ],
        [
            'id' => 7,
            'title' => 'Tropic',
            'color' => 'dark-green',
        ],
    ];
}
