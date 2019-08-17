<?php

namespace database\seeds\data;
class Features
{
    const MODEL = \App\Models\Types\Feature::class;
    const DATA = [
        [
            'id' => 1,
            'title' => 'Taiga',
            'background' => '',
            'terrain_ids' => '[3]',
        ],
        [
            'id' => 2,
            'title' => 'Lush Forest',
            'background' => '',
            'terrain_ids' => '[1]',
        ],
        [
            'id' => 3,
            'title' => 'Pine Forest',
            'background' => '',
            'terrain_ids' => '[4,5]',
        ],
        [
            'id' => 4,
            'title' => 'Dry Forest',
            'background' => '',
            'terrain_ids' => '[6]',
        ],
        [
            'id' => 5,
            'title' => 'Rainforest',
            'background' => '',
            'terrain_ids' => '[2]',
        ],
        [
            'id' => 6,
            'title' => 'Swamp',
            'background' => '',
            'terrain_ids' => '[1]',
            'landscape_ids' => '[2]',
        ],
        [
            'id' => 7,
            'title' => 'Floodplain',
            'background' => '',
            'terrain_ids' => '[]',
            'landscape_ids' => '[2]',
            'require_river' => true,
        ],
        [
            'id' => 8,
            'title' => 'Delta',
            'background' => '',
            'terrain_ids' => '[]',
            'landscape_ids' => '[2]',
            'require_river' => true,
            'require_water' => true,
        ],
        [
            'id' => 9,
            'title' => 'Salt Plain',
            'background' => '',
            'terrain_ids' => '[9]',
        ],
        [
            'id' => 10,
            'title' => 'Oasis',
            'background' => '',
            'terrain_ids' => '[9]',
        ],
    ];
}
