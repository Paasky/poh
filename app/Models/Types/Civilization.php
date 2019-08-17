<?php

namespace App\Models\Types;

use Illuminate\Database\Eloquent\Model;

class Civilization extends Model 
{

    protected $table = 'civilizations';
    public $timestamps = false;
    protected $fillable = array('title', 'color1', 'color2', 'icon');

}