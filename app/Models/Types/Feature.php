<?php

namespace App\Models\Types;

use App\Traits\HasYields;
use App\Traits\ShownOnMap;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasYields, ShownOnMap;

    protected $table = 'features';
    public $timestamps = false;
    protected $fillable = array('background');

}
