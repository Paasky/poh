<?php

namespace App\Models\Types;

use App\Models\PohModel;
use App\Traits\HasYields;
use App\Traits\ShownOnMap;

class Landscape extends PohModel
{
    use HasYields, ShownOnMap;

    protected $table = 'landscapes';
    public $timestamps = false;
    protected $fillable = array('title', 'height');

}
