<?php

namespace App\Managers;

use App\Models\Game;

class GameManager
{
    public static function generate(): Game
    {

    }

    public static function newTurn(Game $game): void
    {
        foreach ($game->events->where('is_active', true) as $event) {
            EventManager::newTurn($event);
        }

        foreach ($game->players as $player) {
            PlayerManager::newTurn($player);
        }
    }


}
