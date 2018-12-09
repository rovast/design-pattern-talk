<?php

namespace Rovast\DesignPatternTalk\Chapter17\v2;

/**
 * Class Guards.
 */
class Guards extends Player
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function attack()
    {
        echo "{$this->name} 发起进攻".PHP_EOL;
    }

    public function defense()
    {
        echo "{$this->name} 进行防守".PHP_EOL;
    }
}
