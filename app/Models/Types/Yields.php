<?php

namespace App\Models\Types;

use Illuminate\Database\Eloquent\Model;

class Yields extends Model
{

    protected $table = 'yields';
    public $timestamps = false;
    protected $fillable = array('model_id', 'model_class', 'biome_id', 'terrain_id', 'landscape_id', 'feature_id', 'resource_id', 'food', 'gold', 'production', 'culture', 'research', 'religion', 'health', 'order', 'corruption', 'espionage', 'trade_routes', 'trade_gold', 'trade_research', 'trade_espionage', 'trade_values_affect_land', 'trade_values_affect_water', 'trade_values_affect_air', 'is_local', 'is_percent');

    public function biome()
    {
        return $this->belongsTo('Biome');
    }

    public function map()
    {
        return $this->belongsTo('Map');
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

}
