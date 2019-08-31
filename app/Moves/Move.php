<?php

namespace App\Moves;

use App\Managers\UnitManager;
use App\Models\Hex;
use App\Models\Unit;

class Move
{
    /** @var Unit  */
    private $unit;
    /** @var Hex  */
    private $toHex;
    /** @var float  */
    private $cost;

    private $isDone = false;

    public function __construct(Unit $unit, Hex $toHex, float $cost)
    {
        $this->unit = $unit;
        $this->toHex = $toHex;
        $this->cost = $cost;
    }

    public function apply(): void
    {
        UnitManager::clearFortify($this->unit, false);
        $this->unit->hex_id = $this->toHex->id;
        $this->unit->moves = round($this->unit->moves - $this->cost, 2);
        $this->unit->save();
    }

    /**
     * @return Unit
     */
    public function getUnit(): Unit
    {
        return $this->unit;
    }

    /**
     * @return Hex
     */
    public function getToHex(): Hex
    {
        return $this->toHex;
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return $this->cost;
    }

    /**
     * @return bool
     */
    public function isDone(): bool
    {
        return $this->isDone;
    }
}
