<?php

namespace App\Models\Types;

use App\Models\PohModel;
use App\Traits\HasYields;
use App\Traits\ShownOnMap;

class Biome extends PohModel
{
    use HasYields, ShownOnMap;

    protected $table = 'biomes';
    public $timestamps = false;
    protected $fillable = array('title', 'color');

}
