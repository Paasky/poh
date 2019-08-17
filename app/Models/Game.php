<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model 
{

    protected $table = 'games';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('map_id', 'title');

    public function map()
    {
        return $this->belongsTo('Map');
    }

    public function turns()
    {
        return $this->hasMany('Turn');
    }

}