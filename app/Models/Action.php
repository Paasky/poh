<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Action extends Model 
{

    protected $table = 'actions';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('player_turn_id', 'model_id', 'model_class', 'data', 'type');

    public function playerTurn()
    {
        return $this->belongsTo('PlayerTurn');
    }

}