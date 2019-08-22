<?php

namespace database\seeds\data;

use App\Models\PohModel;

abstract class PohSeeder
{
    public $idColumn = 'model';
    /** @var string|PohModel  */
    public $model = '';
    public $data = [];

    public function preProcessData(): void
    {

    }
}
