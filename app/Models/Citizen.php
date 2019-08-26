<?php

namespace App\Models;

use App\Traits\HasYields;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Citizen
 * @package App
 *
 * @property Hex|null hex
 * @property Building|null building
 */
class Citizen extends Model
{
    use HasYields;

    protected $table = 'citizens';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('city_id', 'hex_id', 'building_id');

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function hex(): BelongsTo
    {
        return $this->belongsTo(Hex::class);
    }

    public function building(): BelongsTo
    {
        return $this->belongsTo(Building::class);
    }
}
