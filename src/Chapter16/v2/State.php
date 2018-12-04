<?php

namespace Rovast\DesignPatternTalk\Chapter16\v2;

/**
 * abstract Class State
 *
 * @package \Rovast\DesignPatternTalk\Chapter16\v2
 */
abstract class State
{
    abstract public function writeProgram(Work $work);
}
