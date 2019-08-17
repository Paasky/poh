<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model 
{

    protected $table = 'cities';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('city_type_id', 'player_id', 'hex_id', 'title');

    public function type()
    {
        return $this->belongsTo('CityType');
    }

    public function owner()
    {
        return $this->belongsTo('Player');
    }

    public function hex()
    {
        return $this->belongsTo('Hex');
    }

}