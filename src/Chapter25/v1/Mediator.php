<?php
/**
 * Created by PhpStorm.
 * User: rovast
 * Date: 2018-12-24
 * Time: 21:51.
 */

namespace Rovast\DesignPatternTalk\Chapter25\v1;

abstract class Mediator
{
    abstract public function send(string $message, Colleague $colleague);
}
