<?php

namespace App\Managers;

use App\Exceptions\ImpossibleException;
use App\Exceptions\PlayerIsHumanException;
use App\Messages\Messages;
use App\Messages\YourTurnMessage;
use App\Models\Game;
use App\Models\Player;

class GameManager
{
    public static function generate(): Game
    {

    }

    public static function newTurn(Game $game): void
    {
        if ($game->current_player_id == $game->next_player_id) {
            throw new ImpossibleException(
                'Current player is still playing their turn',
                "Tried to go to next player/turn in game [{$game->id}], but the next player [{$game->next_player_id}] is still the current player"
            );
        }

        foreach ($game->events->where('is_active', true) as $event) {
            EventManager::nextTurn($event);
        }
        foreach ($game->cities as $city) {
            CityManager::nextTurn($city);
        }
        foreach ($game->units as $unit) {
            UnitManager::nextTurn($unit);
        }
        foreach ($game->players as $player) {
            try {
                $game->current_player_id = $player->id;
                $game->save();
                PlayerManager::nextTurn($player);
            } catch (PlayerIsHumanException $e) {
                Messages::create(new YourTurnMessage($player));
                break;
            }
        }
    }

    public static function nextPlayerOrTurn(Game $game): void
    {
        if ($game->current_player_id == $game->next_player_id) {
            throw new ImpossibleException(
                'Current player is still playing their turn',
                "Tried to go to next player/turn in game [{$game->id}], but the next player [{$game->next_player_id}] is still the current player"
            );
        }

        if ($player = $game->next_player) {
            $game->current_player_id = $game->next_player_id;
            $game->next_player_id = null;
            if ($player->is_ai) {
                AiManager::playTurn($player);
            } else {
                Messages::create(new YourTurnMessage($player));
            }
            return;
        }

        foreach ($game->events->where('is_active', true) as $event) {
            EventManager::nextTurn($event);
        }

        foreach ($game->players as $player) {
            PlayerManager::nextTurn($player);
        }

        $player = $game->players->first();
        $game->current_player_id = null;
        $game->next_player_id = $player->id;
        $game->save();
        $game->refresh();
        static::nextPlayerOrTurn($game);
    }

    public static function endTurn(Game $game, Player $player, bool $continueToNexTurn = true): void
    {
        GameIntegrityManager::verifyPlayerAndGame($player, $game);

        if (!static::isPlayerTurn($game, $player)) {
            throw new ImpossibleException(
              "It is not your turn",
              "Tried to end turn for Player [{$player->id}] for Game [{$game->id}], but it is currently the turn of player [{$game->current_player_id}]"
            );
        }

        $game->next_player_id = $game->players->firstWhere('id', '>', $player->id)->id ?? null;
        $game->current_player_id = null;
        $game->save();
        $game->refresh();
        if ($continueToNexTurn) {
            static::nextPlayerOrTurn($game);
        }
    }

    public static function isPlayerTurn(Game $game, Player $player): bool
    {
        return $game->current_player_id == $player->id;
    }
}
