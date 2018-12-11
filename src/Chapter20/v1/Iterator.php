<?php

namespace Rovast\DesignPatternTalk\Chapter20\v1;

/**
 * abstract Class Iterator
 *
 * @package \Rovast\DesignPatternTalk\Chapter20\v1
 */
abstract class Iterator
{
    abstract public function first();

    abstract public function next();

    abstract public function isDone();

    abstract public function currentItem();
}
