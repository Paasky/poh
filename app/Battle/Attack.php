<?php


namespace App\Battle;


use App\Models\Building;
use App\Models\Improvement;
use App\Models\Unit;

class Attack
{
    /** @var Unit  */
    private $attacker;
    /** @var Building|Improvement|Unit  */
    private $target;

    /**
     * Attack constructor.
     * @param Unit $attacker
     * @param Unit|Building|Improvement $target
     */
    public function __construct(Unit $attacker, $target)
    {
        $this->attacker = $attacker;
        $this->target = $target;
    }

    public function isVsUnit(): bool
    {
        return $this->target instanceof Unit;
    }

    public function isVsBuilding(): bool
    {
        return $this->target instanceof Building;
    }

    public function isVsImprovement(): bool
    {
        return $this->target instanceof Improvement;
    }

    /**
     * @return Unit
     */
    public function getAttacker(): Unit
    {
        return $this->attacker;
    }

    /**
     * @return Building|Improvement|Unit
     */
    public function getTarget()
    {
        return $this->target;
    }

}
