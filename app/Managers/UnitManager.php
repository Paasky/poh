<?php


namespace App\Managers;


use App\Exceptions\GameIdMismatchException;
use App\Models\Hex;
use App\Models\Player;
use App\Models\Types\UnitType;
use App\Models\Unit;

class UnitManager
{
    public static function create(UnitType $type, Player $player, Hex $hex, string $name = null): Unit
    {
        if ($player->game_id != $hex->map->game_id) {
            throw new GameIdMismatchException(
                "Player and hex game id mismatch",
                "Player [$player->id] and hex [$hex->id] game id [$player->game_id vs {$hex->map->game_id}] mismatch"
            );
        }

        return Unit::create([
            'unit_type_id' => $type->id,
            'player_id' => $player->id,
            'hex_id' => $hex->id,
            'name' => $name
        ]);
    }
}
