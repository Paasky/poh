<?php

namespace App\Models\Types;

use App\Traits\HasYields;
use App\Traits\ShownOnMap;
use Illuminate\Database\Eloquent\Model;

class Landscape extends Model
{
    use HasYields, ShownOnMap;

    protected $table = 'landscapes';
    public $timestamps = false;
    protected $fillable = array('title', 'height');

}
