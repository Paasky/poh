<?php

namespace database\seeds\data;

use App\Models\PohModel;
use App\Models\Types\Terrain;

class Terrains
{
    const MODEL = Terrain::class;
    const DATA = [
        [
            'model' => PohModel::TERRAIN_GRASS,
            'title' => PohModel::TERRAIN_TYPE_GRASS,
            'type' => PohModel::TERRAIN_TYPE_GRASS,
            'background' => '',
            'biomes' => [
                PohModel::BIOME_SUB_ARCTIC,
                PohModel::BIOME_TEMPERATE,
                PohModel::BIOME_SUB_TROPIC
            ],
        ],
        [
            'model' => PohModel::TERRAIN_TROPICAL_GRASS,
            'title' => 'Tropical Grass',
            'type' => PohModel::TERRAIN_TYPE_GRASS,
            'background' => '',
            'biomes' => [7],
        ],
        [
            'model' => PohModel::TERRAIN_TUNDRA,
            'title' => 'Tundra',
            'type' => PohModel::TERRAIN_TYPE_PLAINS,
            'background' => '',
            'biomes' => [PohModel::BIOME_ARCTIC],
        ],
        [
            'model' => PohModel::TERRAIN_PLAINS,
            'title' => PohModel::TERRAIN_TYPE_PLAINS,
            'type' => PohModel::TERRAIN_TYPE_PLAINS,
            'background' => '',
            'biomes' => [
                PohModel::BIOME_SUB_ARCTIC,
                PohModel::BIOME_TEMPERATE,
                PohModel::BIOME_SUB_TROPIC
            ],
        ],
        [
            'model' => PohModel::TERRAIN_STEPPE,
            'title' => 'Steppe',
            'type' => PohModel::TERRAIN_TYPE_PLAINS,
            'background' => '',
            'biomes' => [PohModel::BIOME_CONTINENTAL],
        ],
        [
            'model' => PohModel::TERRAIN_SAVANNA,
            'title' => 'Savanna',
            'type' => PohModel::TERRAIN_TYPE_PLAINS,
            'background' => '',
            'biomes' => [PohModel::BIOME_ARID],
        ],
        [
            'model' => PohModel::TERRAIN_ICE,
            'title' => 'Ice',
            'type' => PohModel::TERRAIN_TYPE_DESOLATE,
            'background' => '',
            'biomes' => [PohModel::BIOME_ARCTIC],
        ],
        [
            'model' => PohModel::TERRAIN_SHRUBLAND,
            'title' => 'Shrubland',
            'type' => PohModel::TERRAIN_TYPE_DESOLATE,
            'background' => '',
            'biomes' => [PohModel::BIOME_CONTINENTAL],
        ],
        [
            'model' => PohModel::TERRAIN_DESERT,
            'title' => 'Desert',
            'type' => PohModel::TERRAIN_TYPE_DESOLATE,
            'background' => '',
            'biomes' => [PohModel::BIOME_ARID],
        ],
        [
            'model' => PohModel::TERRAIN_GREAT_RIVER,
            'title' => 'Great River',
            'type' => PohModel::TERRAIN_TYPE_FRESH_WATER,
            'background' => '',
            'biomes' => [
                PohModel::BIOME_ARCTIC,
                PohModel::BIOME_SUB_ARCTIC,
                PohModel::BIOME_TEMPERATE,
                PohModel::BIOME_CONTINENTAL,
                PohModel::BIOME_SUB_TROPIC,
                PohModel::BIOME_TROPIC,
                PohModel::BIOME_ARID
            ],
        ],
        [
            'model' => PohModel::TERRAIN_LAKE,
            'title' => 'Lake',
            'type' => PohModel::TERRAIN_TYPE_FRESH_WATER,
            'background' => '',
            'biomes' => [
                PohModel::BIOME_ARCTIC,
                PohModel::BIOME_SUB_ARCTIC,
                PohModel::BIOME_TEMPERATE,
                PohModel::BIOME_CONTINENTAL,
                PohModel::BIOME_SUB_TROPIC,
                PohModel::BIOME_TROPIC,
                PohModel::BIOME_ARID
            ],
        ],
        [
            'model' => PohModel::TERRAIN_COAST,
            'title' => 'Coast',
            'type' => PohModel::TERRAIN_TYPE_SALT_WATER,
            'background' => '',
            'biomes' => [
                PohModel::BIOME_ARCTIC,
                PohModel::BIOME_SUB_ARCTIC,
                PohModel::BIOME_TEMPERATE,
                PohModel::BIOME_CONTINENTAL,
                PohModel::BIOME_SUB_TROPIC,
                PohModel::BIOME_TROPIC,
                PohModel::BIOME_ARID
            ],
        ],
        [
            'model' => PohModel::TERRAIN_OCEAN,
            'title' => 'Ocean',
            'type' => PohModel::TERRAIN_TYPE_SALT_WATER,
            'background' => '',
            'biomes' => [
                PohModel::BIOME_ARCTIC,
                PohModel::BIOME_SUB_ARCTIC,
                PohModel::BIOME_TEMPERATE,
                PohModel::BIOME_CONTINENTAL,
                PohModel::BIOME_SUB_TROPIC,
                PohModel::BIOME_TROPIC,
                PohModel::BIOME_ARID
            ],
        ],
    ];
}
