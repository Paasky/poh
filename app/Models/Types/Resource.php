<?php

namespace App\Models\Types;

use App\Traits\HasYields;
use App\Traits\ShownOnMap;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasYields, ShownOnMap;

    protected $table = 'resources';
    public $timestamps = false;
    protected $fillable = array('title', 'icon');

}
