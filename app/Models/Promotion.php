<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promotion extends Model 
{

    protected $table = 'promotions';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('promotion_type_id', 'unit_id');

    public function type()
    {
        return $this->belongsTo('PromotionType');
    }

    public function unit()
    {
        return $this->belongsTo('Unit');
    }

}