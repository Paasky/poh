<?php

namespace App\Models\Types;

use App\Models\PohModel;
use App\Traits\HasYields;
use App\Traits\ShownOnMap;

class Terrain extends PohModel
{
    use HasYields, ShownOnMap;

    protected $table = 'terrains';
    public $timestamps = false;
    protected $fillable = array('title', 'background', 'biome_id');

}
