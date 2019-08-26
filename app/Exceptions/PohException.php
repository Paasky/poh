<?php
/**
 * Created by PhpStorm.
 * User: pekko
 * Date: 24/08/2019
 * Time: 17.10
 */

namespace App\Exceptions;


abstract class PohException extends \Exception
{
    private $adminMessage = '';

    public function __construct(string $userMessage, string $adminMessage = '', $code = 0, \Throwable $previous = null)
    {
        $this->adminMessage = $adminMessage;
        parent::__construct($userMessage, $code, $previous);
    }

    public function getAdminMessage(): string
    {
        return $this->adminMessage;
    }

    public function setAdminMessage(string $adminMessage): PohException
    {
        $this->adminMessage = $adminMessage;
        return $this;
    }
}