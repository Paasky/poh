<?php

namespace App\Models;

use App\Managers\HexManager;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Hex
 * @package App\Models
 *
 */
class Hex extends PohModel
{

    protected $table = 'hexes';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('coords', 'map_id', 'biome_id', 'terrain_id', 'landscape_id', 'feature_id', 'resource_id', 'resource_amount', 'player_id');

    public function left(): ?Hex
    {
        return HexManager::inCoords($this->x - 1, $this->y, $this->map);
    }

    public function right(): ?Hex
    {
        return HexManager::inCoords($this->x + 1, $this->y, $this->map);
    }

    public function topLeft(): ?Hex
    {
        if ($this->map->type == Map::TYPE_FLAT) {
            $xMod = $this->x % 2 ? -1 : 0;
        } else {
            $xMod = -1;
        }
        return HexManager::inCoords($this->x + $xMod, $this->y + 1, $this->map);
    }

    public function topRight(): ?Hex
    {
        if ($this->map->type == Map::TYPE_FLAT) {
            $xMod = $this->x % 2 ? 0 : 1;
        } else {
            $xMod = 0;
        }
        return HexManager::inCoords($this->x + $xMod, $this->y + 1, $this->map);
    }

    public function bottomLeft(): ?Hex
    {
        if ($this->map->type == Map::TYPE_FLAT) {
            $xMod = $this->x % 2 ? -1 : 0;
        } else {
            $xMod = $this->x % 2 ? 0 : -1;
        }
        return HexManager::inCoords($this->x + $xMod, $this->y - 1, $this->map);
    }

    public function bottomRight(): ?Hex
    {
        if ($this->map->type == Map::TYPE_FLAT) {
            $xMod = $this->x % 2 ? 0 : 1;
        } else {
            $xMod = $this->x % 2 ? 1 : 0;
        }
        return HexManager::inCoords($this->x + $xMod, $this->y - 1, $this->map);
    }

    public function map()
    {
        return $this->belongsTo('Map');
    }

    public function biome()
    {
        return $this->belongsTo('Biome');
    }

    public function terrain()
    {
        return $this->belongsTo('Terrain');
    }

    public function landscape()
    {
        return $this->belongsTo('Landscape');
    }

    public function feature()
    {
        return $this->belongsTo('Feature');
    }

    public function resource()
    {
        return $this->belongsTo('Resource');
    }

    public function city()
    {
        return $this->hasOne('City');
    }

    public function cultures()
    {
        return $this->hasMany('HexCulture');
    }

    public function units()
    {
        return $this->hasMany('Unit');
    }

    public function improvement()
    {
        return $this->hasOne('Improvement');
    }

    public function events()
    {
        return $this->hasMany('Event');
    }

    public function district()
    {
        return $this->hasOne('District');
    }
}
