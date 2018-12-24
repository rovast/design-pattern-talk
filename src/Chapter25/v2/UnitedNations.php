<?php
/**
 * Created by PhpStorm.
 * User: rovast
 * Date: 2018-12-24
 * Time: 22:15
 */

namespace Rovast\DesignPatternTalk\Chapter25\v2;

abstract class UnitedNations
{
    abstract public function declare(string $message, Country $country);
}
