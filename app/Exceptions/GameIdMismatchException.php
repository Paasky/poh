<?php
/**
 * Created by PhpStorm.
 * User: pekko
 * Date: 24/08/2019
 * Time: 17.20
 */

namespace App\Exceptions;


class GameIdMismatchException extends PohException
{
    use ReportableException;
}