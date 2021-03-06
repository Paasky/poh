<?php

namespace App\Models\Types;

use App\Traits\HasYields;
use App\Traits\UsesResources;
use Illuminate\Database\Eloquent\Model;

class DistrictType extends Model
{
    use HasYields, UsesResources;

    protected $table = 'district_types';
    public $timestamps = false;
    protected $fillable = array('title', 'icon', 'cost');

}
