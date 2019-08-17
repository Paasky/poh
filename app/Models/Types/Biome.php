<?php

namespace App\Models\Types;

use App\Traits\HasYields;
use App\Traits\ShownOnMap;
use Illuminate\Database\Eloquent\Model;

class Biome extends Model
{
    use HasYields, ShownOnMap;

    protected $table = 'biomes';
    public $timestamps = false;
    protected $fillable = array('title', 'color');

}
