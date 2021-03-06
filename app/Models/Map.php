<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Map extends PohModel
{

    protected $table = 'maps';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('is_scenario', 'title');

    public function hexes()
    {
        return $this->hasMany('Hex');
    }

}