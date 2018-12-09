<?php

namespace Rovast\DesignPatternTalk\Chapter16\v2;

/**
 * abstract Class State.
 */
abstract class State
{
    abstract public function writeProgram(Work $work);
}
