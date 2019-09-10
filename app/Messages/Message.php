<?php

namespace App\Messages;

use App\Models\Hex;
use App\Models\Player;

abstract class Message
{
    const TYPE_SUCCESS = 'success';
    const TYPE_INFO = 'info';
    const TYPE_WARN = 'warn';
    const TYPE_FAIL = 'fail';

    protected $message = '';

    public function __construct()
    {
        if (!$this->message) {
            throw new \BadFunctionCallException("Messages must have a message text");
        }

        if (!$this->getPlayer() && !$this->isGlobal()) {
            throw new \BadFunctionCallException("Messages must have a player or be global");
        }
    }

    public abstract function getPlayer(): ?Player;

    public abstract function getType(): string;

    public abstract function getHex(): ?Hex;

    public function isGlobal(): bool
    {
        return false;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getOutput(): array
    {
        return [
            'type' => $this->getType(),
            'message' => $this->getMessage(),
            'x' => $this->getHex()->x,
            'y' => $this->getHex()->y,
        ];
    }
}
