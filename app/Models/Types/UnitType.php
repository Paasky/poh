<?php

namespace App\Models\Types;

use App\Traits\HasYields;
use App\Traits\UsesResources;
use Illuminate\Database\Eloquent\Model;

class UnitType extends Model
{
    use HasYields, UsesResources;

    const CLASS_WORKER = 'worker';
    const CLASS_SETTLER = 'settler';
    const CLASS_SHIP = 'ship';
    const CLASS_HEAVY_SHIP = 'heavy_ship';
    const CLASS_STEALTH_SHIP = 'stealth_ship';
    const CLASS_SCOUT = 'scout';
    const CLASS_INFANTRY = 'infantry';
    const CLASS_HEAVY_INFANTRY = 'heavy_infantry';
    const CLASS_RANGED = 'ranged';
    const CLASS_MOUNTED = 'mounted';
    const CLASS_ARMORED = 'armored';
    const CLASS_SIEGE = 'siege';
    const CLASS_FIGHTER = 'fighter';
    const CLASS_BOMBER = 'bomber';
    const CLASS_MISSILE = 'missile';

    const TYPE_REGULAR = 'regular';
    const TYPE_SUPPORT = 'support';
    const TYPE_CIVILIAN = 'civilian';
    const TYPE_BASED = 'based';

    CONST DOMAIN_LAND = 'land';
    CONST DOMAIN_SEA = 'sea';
    CONST DOMAIN_AIR = 'air';

    protected $table = 'unit_types';
    public $timestamps = false;
    protected $fillable = array('title', 'icon', 'cost');

}
