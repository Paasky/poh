<?php

namespace App\Models\Types;

use App\Traits\HasYields;
use App\Traits\UsesResources;
use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    const ABILITY_VS_HEAVY_INF = 'vsHeavyInf';
    const ABILITY_VS_MOUNTED = 'vsMounted';
    const ABILITY_VS_DAMAGED = 'vsDamaged';
    const ABILITY_VS_AIR = 'vsAir';
    const ABILITY_VS_ARMOR = 'vsArmor';
    const ABILITY_VS_NUKE = 'vsNuke';
    const ABILITY_VS_RANGED = 'vsRanged';
    const ABILITY_IN_PLAIN = 'inPlain';
    const ABILITY_IN_HILL = 'inHill';
    const ABILITY_IN_MOUNTAIN = 'inMountain';
    const ABILITY_IN_FROZEN = 'inFrozen';
    const ABILITY_IN_DESERT = 'inDesert';
    const ABILITY_IN_FOREST = 'inForest';
    const ABILITY_IN_BUILT_UP = 'inBuiltUp';
    const ABILITY_IN_FORTS = 'inForts';
    const ABILITY_IN_CITY = 'vsCity';
    const ABILITY_CAN_CONSCRIPT = 'canConscript';
    const ABILITY_CAN_TARGET = 'canTarget';
    const ABILITY_CAN_SAIL_OCEAN = 'canSailOcean';
    const ABILITY_CAN_ENTER_MOUNTAINS = 'canEnterMountains';
    const ABILITY_MOVE_AFTER_ATTACK = 'moveAfterAttack';
    const ABILITY_MULTIPLE_ATTACKS = 'multipleAttacks';
    const ABILITY_STRENGTH = 'strength';
    const ABILITY_HIDDEN = 'hidden';
    const ABILITY_EVADE = 'evade';
    const ABILITY_INTERCEPT = 'intercept';

    protected $table = 'abilities';
    public $timestamps = false;
    protected $fillable = array('model_type', 'model_id', 'ability', 'effect', 'is_percent', 'only_attack', 'only_defense');

}
