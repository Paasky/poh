<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;

/**
 * Class City
 * @package App\Models
 * @property Collection|WorkedHex[] workedHexes
 * @property Collection|Building[] buildings
 * @property Collection|Citizen[] citizens
 * @property Collection|Unit[] dependentUnits
 */
class City extends Model
{

    protected $table = 'cities';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('city_type_id', 'player_id', 'hex_id', 'title');

    public function type(): BelongsTo
    {
        return $this->belongsTo('CityType');
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo('Player');
    }

    public function hex(): BelongsTo
    {
        return $this->belongsTo('Hex');
    }

    public function buildings(): HasMany
    {
        return $this->hasMany(Building::class);
    }

    public function citizens(): HasMany
    {
        return $this->hasMany(Citizen::class);
    }

    public function workedHexes(): HasMany
    {
        return $this->hasMany(WorkedHex::class);
    }

    public function dependentUnits(): HasMany
    {
        return $this->hasMany(Unit::class);
    }
}
