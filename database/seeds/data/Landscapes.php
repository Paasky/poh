<?php

namespace database\seeds\data;
class Landscapes
{
    const MODEL = \App\Models\Types\Landscape::class;
    const DATA = [
        [
            'id' => 1,
            'title' => 'Canyon',
            'height' => -1,
        ],
        [
            'id' => 2,
            'title' => 'Flat',
            'height' => 0,
        ],
        [
            'id' => 3,
            'title' => 'Hills',
            'height' => 1,
        ],
        [
            'id' => 4,
            'title' => 'Mountains',
            'height' => 3,
        ],
        [
            'id' => 5,
            'title' => 'Peak',
            'height' => 4,
        ],
    ];
}
