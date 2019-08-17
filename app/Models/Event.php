<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model 
{

    protected $table = 'events';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('event_type_id', 'hex_id', 'ends_on_turn');

    public function type()
    {
        return $this->belongsTo('EventType');
    }

    public function hex()
    {
        return $this->belongsTo('Hex');
    }

}