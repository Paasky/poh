<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlayerTurn extends Model 
{

    protected $table = 'player_turns';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('turn_id', 'player_id');

    public function turn()
    {
        return $this->belongsTo('Turn');
    }

    public function player()
    {
        return $this->belongsTo('Player');
    }

}