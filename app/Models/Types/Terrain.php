<?php

namespace App\Models\Types;

use App\Traits\HasYields;
use App\Traits\ShownOnMap;
use Illuminate\Database\Eloquent\Model;

class Terrain extends Model
{
    use HasYields, ShownOnMap;

    protected $table = 'terrains';
    public $timestamps = false;
    protected $fillable = array('title', 'background', 'biome_id');

}
