<?php

namespace App\Models\Types;

use Illuminate\Database\Eloquent\Model;

class TechnologyRequirement extends Model 
{

    protected $table = 'technology_requirements';
    public $timestamps = false;
    protected $fillable = array('required_id', 'for_id');

    public function requiredTech()
    {
        return $this->belongsTo('Technology', 'required_id');
    }

    public function forTech()
    {
        return $this->belongsTo('Technology', 'for_id');
    }

}