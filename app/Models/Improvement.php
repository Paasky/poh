<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Improvement extends Model 
{

    protected $table = 'improvements';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('improvement_type_id', 'hex_id');

    public function type()
    {
        return $this->belongsTo('ImprovementType');
    }

    public function hex()
    {
        return $this->belongsTo('Hex');
    }

}