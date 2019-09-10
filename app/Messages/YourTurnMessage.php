<?php

namespace App\Messages;

use App\Models\Hex;
use App\Models\Player;

class YourTurnMessage extends Message
{
    /** @var Player  */
    private $player;

    public function __construct(Player $player)
    {
        $this->player = $player;
        parent::__construct();
    }

    public function getPlayer(): Player
    {
        return $this->player;
    }

    public function getHex(): ?Hex
    {
        return null;
    }

    public function getType(): string
    {
        return self::TYPE_INFO;
    }
}
