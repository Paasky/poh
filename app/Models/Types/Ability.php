<?php

namespace App\Models\Types;

use App\Traits\HasYields;
use App\Traits\UsesResources;
use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    protected $table = 'abilities';
    public $timestamps = false;
    protected $fillable = array('model_type', 'model_id', 'ability', 'effect', 'is_percent', 'only_attack', 'only_defense');
}
