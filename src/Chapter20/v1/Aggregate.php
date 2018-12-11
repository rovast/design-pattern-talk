<?php

namespace Rovast\DesignPatternTalk\Chapter20\v1;

/**
 * abstract Class Aggregate.
 */
abstract class Aggregate
{
    abstract public function createIterator();
}
