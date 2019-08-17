<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model 
{

    protected $table = 'players';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('civilization_id', 'game_id', 'user_id');

    public function civilization()
    {
        return $this->belongsTo('Civilization');
    }

    public function game()
    {
        return $this->belongsTo('Game');
    }

    public function cities()
    {
        return $this->hasMany('City');
    }

    public function units()
    {
        return $this->hasMany('Unit');
    }

    public function turns()
    {
        return $this->hasMany('PlayerTurn');
    }

    public function hexCultures()
    {
        return $this->hasMany('HexCulture');
    }

    public function unitTrainings()
    {
        return $this->hasMany('UnitTraining');
    }

    public function hexes()
    {
        return $this->hasMany('Hex');
    }

}