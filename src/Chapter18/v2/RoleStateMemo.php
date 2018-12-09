<?php

namespace Rovast\DesignPatternTalk\Chapter18\v2;

/**
 * Class RoleStateMemo.
 */
class RoleStateMemo
{
    public $life;

    public $attack;

    public $defense;

    public function __construct($life, $attack, $defense)
    {
        $this->life    = $life;
        $this->attack  = $attack;
        $this->defense = $defense;
    }
}
