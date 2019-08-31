<?php

namespace App\Messages;

use App\KnownTechnology;

class DiscoveredTechMessage extends Message
{
    /** @var KnownTechnology  */
    private $tech;

    public function __construct(KnownTechnology $tech)
    {
        $this->tech = $tech;
    }

    public function getTech(): KnownTechnology
    {
        return $this->tech;
    }
}
