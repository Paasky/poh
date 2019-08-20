<?php

namespace database\seeds\data;
use App\Models\PohModel;
use App\Models\Types\Landscape;

class Landscapes
{
    const MODEL = Landscape::class;
    const DATA = [
        [
            'model' => PohModel::LANDSCAPE_WATER,
            'title' => 'Water',
            'height' => -1,
        ],
        [
            'model' => PohModel::LANDSCAPE_CANYON,
            'title' => 'Canyon',
            'height' => -1,
        ],
        [
            'model' => PohModel::LANDSCAPE_FLAT,
            'title' => 'Flat',
            'height' => 0,
        ],
        [
            'model' => PohModel::LANDSCAPE_HILLS,
            'title' => 'Hills',
            'height' => 1,
        ],
        [
            'model' => PohModel::LANDSCAPE_STEEP_HILLS,
            'title' => 'Hills',
            'height' => 1,
        ],
        [
            'model' => PohModel::LANDSCAPE_MOUNTAINS,
            'title' => 'Mountains',
            'height' => 3,
        ],
        [
            'model' => PohModel::LANDSCAPE_PEAK,
            'title' => 'Peak',
            'height' => 4,
        ],
    ];
}
