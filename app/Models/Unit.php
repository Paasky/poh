<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model 
{

    protected $table = 'units';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('unit_type_id', 'player_id', 'hex_id', 'damage_percent', 'name');

    public function type()
    {
        return $this->belongsTo('UnitType');
    }

    public function owner()
    {
        return $this->belongsTo('Player');
    }

    public function hex()
    {
        return $this->belongsTo('Hex');
    }

    public function promotions()
    {
        return $this->hasMany('Promotion');
    }

}