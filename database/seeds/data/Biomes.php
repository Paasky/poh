<?php

namespace database\seeds\data;
use App\Models\PohModel;
use App\Models\Types\Biome;

class Biomes
{
    const MODEL = Biome::class;
    const DATA = [
        [
            'model' => PohModel::BIOME_ARCTIC,
            'title' => 'Arctic',
            'color' => 'light-blue',
        ],
        [
            'model' => PohModel::BIOME_SUB_ARCTIC,
            'title' => 'Sub-Arctic',
            'color' => 'light-gray',
        ],
        [
            'model' => PohModel::BIOME_TEMPERATE,
            'title' => 'Temperate',
            'color' => 'army-green',
        ],
        [
            'model' => PohModel::BIOME_CONTINENTAL,
            'title' => 'Continental',
            'color' => 'light-green',
        ],
        [
            'model' => PohModel::BIOME_SUB_TROPIC,
            'title' => 'Sub-Tropic',
            'color' => 'pear',
        ],
        [
            'model' => PohModel::BIOME_ARID,
            'title' => 'Arid',
            'color' => 'golden-yellow',
        ],
        [
            'model' => PohModel::BIOME_TROPIC,
            'title' => 'Tropic',
            'color' => 'dark-green',
        ],
    ];
}
