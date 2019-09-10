<?php

namespace App\Messages;

use App\Models\Hex;
use App\Models\Player;
use App\Models\Unit;

class DeadUnitMessage extends Message
{
    /** @var Unit */
    private $unit;

    public function __construct(Unit $unit)
    {
        $this->unit = $unit;
        parent::__construct();
    }

    public function getUnit(): Unit
    {
        return $this->unit;
    }

    public function getPlayer(): ?Player
    {
        return $this->unit->owner;
    }

    public function getHex(): Hex
    {
        return $this->unit->hex;
    }

    public function getType(): string
    {
        return self::TYPE_FAIL;
    }
}
