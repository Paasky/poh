<?php

namespace database\seeds\data;
use App\Models\PohModel;
use App\Models\Types\Feature;
use App\Models\Types\Landscape;
use App\Models\Types\Terrain;

class Features extends PohSeeder
{
    public $model = Feature::class;

    public function preProcessData(): void
    {
        foreach ($this->data as $i => $row) {
            foreach ($row['terrains'] ?? [] as $terrainIndex => $terrainModel) {
                $this->data[$i]['terrains'][$terrainIndex] = Terrain::where('model', $terrainModel)->firstOrFail()->id;
            }
            foreach ($row['landscapes'] ?? [] as $landscapeIndex => $landscapeModel) {
                $this->data[$i]['landscapes'][$landscapeIndex] = Landscape::where('model', $landscapeModel)->firstOrFail()->id;
            }
        }
    }

    public $data = [
        [
            'model' => PohModel::FEATURE_TAIGA,
            'title' => 'Taiga',
            'background' => '',
            'terrains' => [PohModel::TERRAIN_TUNDRA],
        ],
        [
            'model' => PohModel::FEATURE_LUSH_FOREST,
            'title' => 'Lush Forest',
            'background' => '',
            'terrains' => [PohModel::TERRAIN_GRASS],
        ],
        [
            'model' => PohModel::FEATURE_PINE_FOREST,
            'title' => 'Pine Forest',
            'background' => '',
            'terrains' => [PohModel::TERRAIN_PLAINS, PohModel::TERRAIN_STEPPE],
        ],
        [
            'model' => PohModel::FEATURE_DRY_FOREST,
            'title' => 'Dry Forest',
            'background' => '',
            'terrains' => [PohModel::TERRAIN_SAVANNA],
        ],
        [
            'model' => PohModel::FEATURE_RAIN_FOREST,
            'title' => 'Rain Forest',
            'background' => '',
            'terrains' => [PohModel::TERRAIN_TROPICAL_GRASS],
        ],
        [
            'model' => PohModel::FEATURE_SWAMP,
            'title' => 'Swamp',
            'background' => '',
            'terrains' => [PohModel::TERRAIN_GRASS],
            'landscapes' => [PohModel::LANDSCAPE_FLAT],
        ],
        [
            'model' => PohModel::FEATURE_FLOOD_PLAIN,
            'title' => 'Floodplain',
            'background' => '',
            'landscapes' => [PohModel::LANDSCAPE_FLAT],
            'require_river' => true,
        ],
        [
            'model' => PohModel::FEATURE_DELTA,
            'title' => 'Delta',
            'background' => '',
            'landscapes' => [PohModel::LANDSCAPE_FLAT],
            'require_river' => true,
            'require_water' => true,
        ],
        [
            'model' => PohModel::FEATURE_SALT_PLAIN,
            'title' => 'Salt Plain',
            'background' => '',
            'terrains' => [PohModel::TERRAIN_DESERT],
        ],
        [
            'model' => PohModel::FEATURE_OASIS,
            'title' => 'Oasis',
            'background' => '',
            'terrains' => [PohModel::TERRAIN_DESERT],
        ],
    ];
}
