<?php

namespace App\Messages;

use App\Managers\UnitManager;
use App\Models\Unit;

class DeadUnitMessage extends Message
{
    /** @var Unit */
    private $unit;

    public function __construct(Unit $unit)
    {
        $this->unit = $unit;
    }

    public function getUnit(): Unit
    {
        return $this->unit;
    }
}
