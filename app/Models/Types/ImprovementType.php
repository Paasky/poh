<?php

namespace App\Models\Types;

use App\Traits\HasYields;
use App\Traits\ShownOnMap;
use Illuminate\Database\Eloquent\Model;

class ImprovementType extends Model
{
    use HasYields, ShownOnMap;

    protected $table = 'improvement_types';
    public $timestamps = false;
    protected $fillable = array('title', 'icon', 'cost', 'technology_id');

}
