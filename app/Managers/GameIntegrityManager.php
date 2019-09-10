<?php

namespace App\Managers;

use App\Exceptions\GameIdMismatchException;
use App\Models\Citizen;
use App\Models\Game;
use App\Models\Hex;
use App\Models\KnownTechnology;
use App\Models\Player;
use App\Models\Unit;
use App\Yields\ActualYields;
use App\Yields\YieldsChanges;

class GameIntegrityManager
{
    public static function verifyPlayerAndHex(Player $player, Hex $hex): void
    {
        if ($player->game_id != $hex->map->game_id) {
            throw new GameIdMismatchException(
                "Player and Hex game id mismatch",
                "Player [$player->id] and hex [$hex->id] game id [$player->game_id vs {$hex->map->game_id}] mismatch"
            );
        }
    }

    public static function verifyUnitAndHex(Unit $unit, Hex $hex): void
    {
        if ($unit->game_id != $hex->map->game_id) {
            throw new GameIdMismatchException(
                "Unit and Hex game id mismatch",
                "Unit [$unit->id] and hex [$hex->id] game id [$unit->game_id vs {$hex->map->game_id}] mismatch"
            );
        }
    }

    public static function verifyPlayerAndGame(Player $player, Game $game): void
    {
        if ($player->game_id != $game->id) {
            throw new GameIdMismatchException(
                "Player and Game id mismatch",
                "Player [$player->id] game id and Game [$game->id] id mismatch"
            );
        }
    }
}
