<?php

namespace database\seeds\data;
class CityTypes
{
    const MODEL = \App\Models\Types\CityType::class;
    const DATA = [
        [
            'id' => 1,
            'title' => 'Village',
            'icon' => '',
        ],
        [
            'id' => 2,
            'title' => 'Hamlet',
            'icon' => '',
        ],
        [
            'id' => 3,
            'title' => 'Town',
            'icon' => '',
        ],
        [
            'id' => 4,
            'title' => 'City',
            'icon' => '',
        ],
        [
            'id' => 5,
            'title' => 'Metropolis',
            'icon' => '',
        ],
    ];
}
