<?php

namespace database\seeds\data;

class Terrains
{
    const MODEL = \App\Models\Types\Terrain::class;
    const DATA = [
        [
            'id' => 1,
            'title' => 'Grass',
            'type' => 'grass',
            'background' => '',
            'biome_ids' => '[2,3,5]',
        ],
        [
            'id' => 2,
            'title' => 'Tropical Grass',
            'type' => 'grass',
            'background' => '',
            'biome_ids' => '[7]',
        ],
        [
            'id' => 3,
            'title' => 'Tundra',
            'type' => 'plains',
            'background' => '',
            'biome_ids' => '[1]',
        ],
        [
            'id' => 4,
            'title' => 'Plains',
            'type' => 'plains',
            'background' => '',
            'biome_ids' => '[2,3,5]',
        ],
        [
            'id' => 5,
            'title' => 'Steppe',
            'type' => 'plains',
            'background' => '',
            'biome_ids' => '[4]',
        ],
        [
            'id' => 6,
            'title' => 'Savanna',
            'type' => 'plains',
            'background' => '',
            'biome_ids' => '[6]',
        ],
        [
            'id' => 7,
            'title' => 'Ice',
            'type' => 'desolate',
            'background' => '',
            'biome_ids' => '[1]',
        ],
        [
            'id' => 8,
            'title' => 'Shrubland',
            'type' => 'desolate',
            'background' => '',
            'biome_ids' => '[4]',
        ],
        [
            'id' => 9,
            'title' => 'Desert',
            'type' => 'desolate',
            'background' => '',
            'biome_ids' => '[6]',
        ],
    ];
}
