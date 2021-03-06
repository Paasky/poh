<?php

namespace App\Managers;

use App\Exceptions\GameIdMismatchException;
use App\Exceptions\ImpossibleException;
use App\Exceptions\InvalidMoveException;
use App\Exceptions\MissingRequirementException;
use App\Messages\DeadUnitMessage;
use App\Messages\Messages;
use App\Models\Building;
use App\Models\Hex;
use App\Models\Improvement;
use App\Models\Player;
use App\Models\PohModel;
use App\Models\Types\Ability;
use App\Models\Types\UnitType;
use App\Models\Types\Yields;
use App\Models\Unit;
use App\Moves\ActualMoveCosts;
use App\Moves\Move;
use App\Moves\MoveCostChanges;
use Illuminate\Support\Collection;

class UnitManager
{
    public static function create(UnitType $type, Player $player, Hex $hex, string $name = null): Unit
    {
        GameIntegrityManager::verifyPlayerAndHex($player, $hex);

        return Unit::create([
            'unit_type_id' => $type->id,
            'player_id' => $player->id,
            'hex_id' => $hex->id,
            'name' => $name
        ]);
    }

    public static function clearFortify(Unit $unit, bool $saveChanges = true): void
    {
        $unit->is_fortified = false;
        $unit->fortified_for = 0;
    }

    public static function move(Unit $unit, Hex $to): void
    {
        GameIntegrityManager::verifyUnitAndHex($unit, $to);

        /** @var Move|null $move */
        $move = static::getMove($unit, $to, true);
        $move->apply();
    }

    public static function canMove(Unit $unit, Hex $to, bool $verify = false): bool
    {
        return (bool) static::getMove($unit, $to, $verify);
    }

    public static function getMove(Unit $unit, Hex $to, bool $verify = false): ?Move
    {
        GameIntegrityManager::verifyUnitAndHex($unit, $to);

        $move = static::possibleMoves($unit)[$to->id] ?? null;
        if (!$move) {
            if ($verify) {
                throw new InvalidMoveException(
                    "Move is not allowed",
                    "Player [{$unit->player_id}] tried to move unit [{$unit->id}] from hex [{$unit->hex_id}] to hex [{$to->id}]"
                );
            }
            return null;
        }
        return $move;
    }

    /**
     * @param Unit $unit
     * @return Move[]
     */
    public static function possibleMoves(Unit $unit): array
    {
        $hexes = [];

        // gather existing neighbouring hexes
        if ($hex = $unit->hex->left) {
            $hexes[] = $hex;
        }
        if ($hex = $unit->hex->topLeft) {
            $hexes[] = $hex;
        }
        if ($hex = $unit->hex->topRight) {
            $hexes[] = $hex;
        }
        if ($hex = $unit->hex->right) {
            $hexes[] = $hex;
        }
        if ($hex = $unit->hex->bottomRight) {
            $hexes[] = $hex;
        }
        if ($hex = $unit->hex->bottomLeft) {
            $hexes[] = $hex;
        }

        // per hex, is it possible to move there?
        $moves = [];
        /** @var Hex $hex */
        foreach ($hexes as $hex) {
            if ($hex->domain_id != $unit->domain_id) {
                continue;
            }

            $moveCost = static::getMoveCost($unit, $hex);
            if ($unit->moves >= $moveCost) {
                // it is, create Move
                $moves[$hex->id] = new Move($unit, $hex, $moveCost);
            }
        }

        return $moves;
    }

    public static function getMoveCost(Unit $unit, Hex $to): float
    {
        GameIntegrityManager::verifyUnitAndHex($unit, $to);

        $abilities = static::getAbilities($unit);

        $actualCost = new ActualMoveCosts(new MoveCostChanges($abilities));
        return $actualCost->getCost($unit->hex, $to);
    }

    /**
     * @param Unit $unit
     * @return Collection|Ability[]
     */
    public static function getAbilities(Unit $unit): Collection
    {
        $abilities = $unit->type->abilities ?: collect();
        foreach ($unit->promotions as $promotion) {
            $abilities = $abilities->merge($promotion->abilities);
        }
        return $abilities;
    }

    public static function hasAbility(Unit $unit, string $ability, bool $verify = false): bool
    {
        foreach (static::getAbilities($unit) as $ability) {
            if ($ability->ability == $ability) {
                return true;
            }
        }

        if ($verify) {
            throw new MissingRequirementException(
                "Unit does not have this ability",
                "Unit [{$unit->id}] does not have required ability [{$ability}]"
            );
        }
        return false;
    }

    public static function attack(Unit $unit, Hex $hex, Unit $target = null): void
    {
        GameIntegrityManager::verifyUnitAndHex($unit, $hex);
        $target = static::getTarget($unit, $hex, [Unit::class, Building::class, Improvement::class], $target);

    }

    /**
     * @param Unit $unit
     * @param Hex $hex
     * @param Unit|Building|Improvement|null $target
     * @throws ImpossibleException
     * @throws MissingRequirementException
     * @throws GameIdMismatchException
     */
    public static function bombard(Unit $unit, Hex $hex, $target = null): void
    {
        GameIntegrityManager::verifyUnitAndHex($unit, $hex);
        $target = static::getTarget($unit, $hex, [Unit::class, Building::class, Improvement::class], $target);

    }

    /**
     * @param Unit $attacker
     * @param Hex $targetHex
     * @param string[]|PohModel[] $allowedClasses
     * @param null|PohModel $preferredTarget
     * @return PohModel
     * @throws ImpossibleException
     * @throws MissingRequirementException
     */
    private static function getTarget(Unit $attacker, Hex $targetHex, array $allowedClasses, $preferredTarget = null)
    {
        if ($preferredTarget) {
            static::hasAbility($attacker, PohModel::ABILITY_CAN_TARGET, true);

            $class = get_class($preferredTarget);
            $id = $target->id ?? 'non-model';

            if (!in_array($class, $allowedClasses)) {
                throw new ImpossibleException(
                    "Invalid target",
                    "Unit [{$attacker->id}] tried to target {$class} [{$id}]"
                );
            }

            if ($preferredTarget->hex_id != $targetHex->id) {
                throw new ImpossibleException(
                    "Invalid target",
                    "Unit [{$attacker->id}] in Hex [{$attacker->hex_id}] tried to target {$class} [{$id}] in Hex [{$target->hex_id}]"
                );
            }

            return $preferredTarget;
        }

        $possibleTargets = [];
        foreach ($targetHex->units as $attacker) {
            $possibleTargets[] = $attacker;
        }
        if ($targetHex->city) {
            foreach ($targetHex->city->buildings as $building) {
                $possibleTargets[] = $building;
            }
        }
        if ($targetHex->improvement) {
            $possibleTargets[] = $targetHex->improvement;
        }

        $targetIndex = array_rand($possibleTargets);
        return $possibleTargets[$targetIndex];
    }

    public static function getAttack(Unit $attacker, $target, string $method = Attack::METHOD_ATTACK): Attack
    {

    }

    public static function nextTurn(Unit $unit): void
    {
        if ($unit->health != 100) {
            $unit->health += static::getHealingPercent($unit);
            if ($unit->health > 100) {
                $unit->health = 100;
            } else {
                static::deleteIfDead($unit);
            }
        }

        $unit->moves = $unit->type->moves;
        $unit->waiting_for_move = !$unit->is_fortified;
        $unit->save();
    }

    public static function getHealingPercent(Unit $unit): int
    {
        $defaultHealPercentPerTurn = 10;
        $yields = HexManager::getYields($unit->hex);
        return $defaultHealPercentPerTurn + ($yields->getHealth() * 10);
    }

    /**
     * @param Unit ...$units
     */
    public static function deleteIfDead(...$units): void
    {
        foreach ($units as $unit) {
            static::verifyIsUnit($unit);
            if ($unit->health <= 0) {
                $unit->delete();
                Messages::create(new DeadUnitMessage($unit));
            }
        }
    }

    public static function verifyIsUnit($unit): void
    {
        if (!$unit instanceof Unit) {
            $class = get_class($unit);
            $unitClass = Unit::class;
            throw new \BadFunctionCallException("Gave class $class, only $unitClass accepted");
        }
    }

    public static function promote(Unit $unit): void
    {

    }

    public static function patrolUntilHealed(Unit $unit): void
    {
        $unit->wake_when_healed = true;
        static::patrol($unit);
    }

    public static function patrol(Unit $unit): void
    {
        $unit->wake_when_danger = true;
        static::fortify($unit);
    }

    public static function fortify(Unit $unit): void
    {
        $unit->is_fortified = true;
        static::skipTurn($unit);
    }

    public static function skipTurn(Unit $unit): void
    {
        $unit->waiting_for_move = false;
    }

    public static function disband(Unit $unit): void
    {
        $unit->delete();
    }

    /**
     * @param Unit $unit
     * @return Yields[]
     */
    public static function getSupplyYields(Unit $unit): array
    {
        $unitYield = new Yields([
            'food' => -1,
            'is_local' => true,
        ]);

        return [$unitYield];
    }
}
