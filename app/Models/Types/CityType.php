<?php

namespace App\Models\Types;

use App\Traits\ShownOnMap;
use Illuminate\Database\Eloquent\Model;

class CityType extends Model
{
    use ShownOnMap;

    protected $table = 'city_types';
    public $timestamps = false;
    protected $fillable = array('title', 'icon');

}
