<?php

namespace App\Messages;

use App\Models\Hex;
use App\Models\KnownTechnology;
use App\Models\Player;

class KnowAboutTechMessage extends Message
{
    /** @var KnownTechnology  */
    private $tech;

    public function __construct(KnownTechnology $tech)
    {
        $this->tech = $tech;
        parent::__construct();
    }

    public function getTech(): KnownTechnology
    {
        return $this->tech;
    }

    public function getPlayer(): ?Player
    {
        return $this->tech->owner;
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
