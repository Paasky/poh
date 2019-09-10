<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KnownTechnology extends Model
{

    protected $table = 'known_technologies';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('technology_id', 'percent');
    protected $visible = array('player_id');

    public function owner()
    {
        return $this->belongsTo('Player');
    }

    public function type()
    {
        return $this->belongsTo('Technology');
    }

}
