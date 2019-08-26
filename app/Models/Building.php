<?php

namespace App\Models;

use App\Models\Types\BuildingType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Building
 * @package App\Models
 *
 * @property BuildingType type
 */
class Building extends Model
{

    protected $table = 'buildings';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('city_id', 'built_amount', 'damage_percent', 'building_type_id');

    public function city()
    {
        return $this->belongsTo('City');
    }

    public function type()
    {
        return $this->belongsTo('BuildingType');
    }

}
