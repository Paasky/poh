<?php

namespace App\Managers;

use App\Models\Citizen;
use App\Models\Game;
use App\Models\Hex;
use App\Models\Player;
use App\Yields\ActualYields;
use App\Yields\YieldsChanges;

class AiManager
{
    public static function playTurn(Player $player): void
    {


        GameManager::endTurn($player->game, $player);
    }
}
