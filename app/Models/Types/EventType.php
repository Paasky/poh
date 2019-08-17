<?php

namespace App\Models\Types;

use App\Traits\HasYields;
use App\Traits\UsesResources;
use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    use HasYields, UsesResources;

    protected $table = 'event_types';
    public $timestamps = false;
    protected $fillable = array('title', 'turns', 'icon');

}
