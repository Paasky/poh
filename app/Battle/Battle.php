<?php


namespace App\Battle;


use App\Managers\HexManager;
use App\Managers\UnitManager;
use App\Models\Types\PromotionType;
use App\Models\Types\UnitType;
use App\Models\Unit;

class Battle
{
    /** @var Attack  */
    private $attack;
    public function __construct(Attack $attack)
    {
        $this->attack = $attack;
    }

    public function fight(): void
    {
        if ($this->attack->isVsUnit()) {
            $this->vsUnitFight();
        }
        elseif ($this->attack->isVsBuilding()) {
            $this->vsBuildingFight();
        }
        elseif ($this->attack->isVsImprovement()) {
            $this->vsImprovementFight();
        }
    }

    private function vsUnitFight(): void
    {
        $attacker = $this->attack->getAttacker();
        $defender = $this->attack->getTarget();

        UnitManager::clearFortify($attacker, false);

        // do battle

        UnitManager::deleteIfDead($attacker, $defender);
    }

    private function vsBuildingFight(): void
    {
        $attacker = $this->attack->getAttacker();
        $building = $this->attack->getTarget();
        $defender = $this->getPatrol();

        UnitManager::clearFortify($attacker, false);

        // do battle

        $units = [$attacker];
        if ($defender) {
            $units[] = $defender;
        }
        UnitManager::deleteIfDead(...$units);
    }

    private function vsImprovementFight(): void
    {
        $attacker = $this->attack->getAttacker();
        $improvement = $this->attack->getTarget();
        $defender = $this->getPatrol();

        UnitManager::clearFortify($attacker, false);

        // do battle

        $units = [$attacker];
        if ($defender) {
            $units[] = $defender;
        }
        UnitManager::deleteIfDead(...$units);
    }

    private function getPatrol(): ?Unit
    {
        $attackerDomainId = $this->attack->getAttacker()->domain_id;
        $possiblePatrols = [];
        $maxRange = UnitType::query()->max('range') + PromotionType::query()->max('range');
        foreach (HexManager::inRange($this->attack->getTarget()->hex, $maxRange) as $hex) {
            $distance = HexManager::getDistance($this->attack->getTarget()->hex, $hex);
            foreach ($hex->units as $unit) {
                if ($unit->range >= $distance) {
                    if ($unit->domain_id != $attackerDomainId && !$unit->can_target_any_domain) {
                        continue;
                    }
                    $possiblePatrols[] = $unit;
                }
            }
        }

        if ($possiblePatrols) {
            return array_rand($possiblePatrols);
        }

        return null;
    }
}
