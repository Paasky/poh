<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turn extends Model 
{

    protected $table = 'turns';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('game_id', 'turn');

    public function game()
    {
        return $this->belongsTo('Game');
    }

}