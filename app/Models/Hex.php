<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hex extends Model 
{

    protected $table = 'hexes';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('coords', 'map_id', 'biome_id', 'terrain_id', 'landscape_id', 'feature_id', 'resource_id', 'resource_amount', 'player_id');

    public function map()
    {
        return $this->belongsTo('Map');
    }

    public function biome()
    {
        return $this->belongsTo('Biome');
    }

    public function terrain()
    {
        return $this->belongsTo('Terrain');
    }

    public function landscape()
    {
        return $this->belongsTo('Landscape');
    }

    public function feature()
    {
        return $this->belongsTo('Feature');
    }

    public function resource()
    {
        return $this->belongsTo('Resource');
    }

    public function city()
    {
        return $this->hasOne('City');
    }

    public function cultures()
    {
        return $this->hasMany('HexCulture');
    }

    public function units()
    {
        return $this->hasMany('Unit');
    }

    public function improvement()
    {
        return $this->hasOne('Improvement');
    }

    public function events()
    {
        return $this->hasMany('Event');
    }

    public function district()
    {
        return $this->hasOne('District');
    }

}