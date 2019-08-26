<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class WorkedHex
 * @package App\Models
 *
 * @property Hex hex
 */
class WorkedHex extends Model
{
    protected $table = 'worked_hexes';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('city_id', 'hex_id', 'citizen_id');

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function hex()
    {
        return $this->belongsTo(Hex::class);
    }

    public function citizen()
    {
        return $this->belongsTo('Citizen');
    }
}
