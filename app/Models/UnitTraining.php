<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UnitTraining extends Model 
{

    protected $table = 'unit_trainings';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('city_id', 'unit_type_id', 'built_amount', 'player_id');

    public function city()
    {
        return $this->belongsTo('City');
    }

    public function type()
    {
        return $this->belongsTo('UnitType');
    }

    public function owner()
    {
        return $this->belongsTo('Player');
    }

}