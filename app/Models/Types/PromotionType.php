<?php

namespace App\Models\Types;

use Illuminate\Database\Eloquent\Model;

class PromotionType extends Model 
{

    protected $table = 'promotion_types';
    public $timestamps = false;
    protected $fillable = array('title', 'icon', 'technology_id');

}