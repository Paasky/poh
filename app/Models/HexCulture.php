<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HexCulture extends Model 
{

    protected $table = 'hex_cultures';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('player_id', 'hex_id', 'amount');

    public function owner()
    {
        return $this->belongsTo('Player');
    }

    public function hex()
    {
        return $this->belongsTo('Hex');
    }

}