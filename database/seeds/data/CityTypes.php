<?php

namespace database\seeds\data;
use App\Models\PohModel;
use App\Models\Types\CityType;

class CityTypes extends PohSeeder
{
    public $model = CityType::class;
    public $data = [
        [
            'model' => PohModel::CITY_VILLAGE,
            'title' => 'Village',
            'icon' => '',
        ],
        [
            'model' => PohModel::CITY_HAMLET,
            'title' => 'Hamlet',
            'icon' => '',
        ],
        [
            'model' => PohModel::CITY_TOWN,
            'title' => 'Town',
            'icon' => '',
        ],
        [
            'model' => PohModel::CITY_CITY,
            'title' => 'City',
            'icon' => '',
        ],
        [
            'model' => PohModel::CITY_METROPOLIS,
            'title' => 'Metropolis',
            'icon' => '',
        ],
        [
            'model' => PohModel::CITY_MEGALOPOLIS,
            'title' => 'Megalopolis',
            'icon' => '',
        ],
    ];
}
