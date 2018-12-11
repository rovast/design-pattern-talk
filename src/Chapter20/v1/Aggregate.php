<?php

namespace Rovast\DesignPatternTalk\Chapter20\v1;

/**
 * abstract Class Aggregate
 *
 * @package \Rovast\DesignPatternTalk\Chapter20\v1
 */
abstract class Aggregate
{
    abstract public function createIterator();
}
