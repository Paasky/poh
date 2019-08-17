<?php

namespace App\Models\Types;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    const ERA_PREHISTORIC = 'prehistoric';
    const ERA_BRONZE = 'bronze';
    const ERA_IRON = 'iron';
    const ERA_CLASSICAL = 'classical';
    const ERA_MEDIEVAL = 'medieval';
    const ERA_HIGH_MEDIEVAL = 'high_medieval';
    const ERA_RENAISSANCE = 'renaissance';
    const ERA_DISCOVERY = 'discovery';
    const ERA_ENLIGHTENMENT = 'enlightenment';
    const ERA_INDUSTRIAL = 'industrial';
    const ERA_GUILDED = 'guilded';
    const ERA_MODERN = 'modern';
    const ERA_ATOMIC = 'atomic';
    const ERA_DIGITAL = 'digital';
    const ERA_INFORMATION = 'information';
    const ERA_NANO = 'nano';

    protected $table = 'technologies';
    public $timestamps = false;
    protected $fillable = array('title', 'icon', 'cost');

    public function requirements()
    {
        return $this->hasMany('TechnologyRequirement', 'for_id');
    }

    public function requiredBys()
    {
        return $this->hasMany('TechnologyRequirement', 'required_id');
    }

}
