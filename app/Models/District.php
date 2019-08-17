<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class District extends Model 
{

    protected $table = 'districts';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('district_type_id', 'hex_id', 'built_amount', 'damage_percent', 'name');

    public function type()
    {
        return $this->belongsTo('DistrictType');
    }

    public function hex()
    {
        return $this->belongsTo('Hex');
    }

}