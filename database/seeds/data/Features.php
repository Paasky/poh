<?php

namespace database\seeds\data;
use App\Models\PohModel;
use App\Models\Types\Feature;

class Features
{
    const MODEL = Feature::class;
    const DATA = [
        [
            'model' => PohModel::FEATURE_TAIGA,
            'title' => 'Taiga',
            'background' => '',
            'terrain_ids' => '[3]',
        ],
        [
            'model' => PohModel::FEATURE_LUSH_FOREST,
            'title' => 'Lush Forest',
            'background' => '',
            'terrain_ids' => '[1]',
        ],
        [
            'model' => PohModel::FEATURE_PINE_FOREST,
            'title' => 'Pine Forest',
            'background' => '',
            'terrain_ids' => '[4,5]',
        ],
        [
            'model' => PohModel::FEATURE_DRY_FOREST,
            'title' => 'Dry Forest',
            'background' => '',
            'terrain_ids' => '[6]',
        ],
        [
            'model' => PohModel::FEATURE_RAIN_FOREST,
            'title' => 'Rain Forest',
            'background' => '',
            'terrain_ids' => '[2]',
        ],
        [
            'model' => PohModel::FEATURE_SWAMP,
            'title' => 'Swamp',
            'background' => '',
            'terrain_ids' => '[1]',
            'landscape_ids' => '[2]',
        ],
        [
            'model' => PohModel::FEATURE_FLOOD_PLAIN,
            'title' => 'Floodplain',
            'background' => '',
            'terrain_ids' => '[]',
            'landscape_ids' => '[2]',
            'require_river' => true,
        ],
        [
            'model' => PohModel::FEATURE_DELTA,
            'title' => 'Delta',
            'background' => '',
            'terrain_ids' => '[]',
            'landscape_ids' => '[2]',
            'require_river' => true,
            'require_water' => true,
        ],
        [
            'model' => PohModel::FEATURE_SALT_PLAIN,
            'title' => 'Salt Plain',
            'background' => '',
            'terrain_ids' => '[9]',
        ],
        [
            'model' => PohModel::FEATURE_OASIS,
            'title' => 'Oasis',
            'background' => '',
            'terrain_ids' => '[9]',
        ],
    ];
}
