<?php

namespace Rovast\DesignPatternTalk\Chapter14\v2;

/**
 * Abstract Class Observer.
 */
abstract class Observer
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * 进行相关动作.
     *
     * @return mixed
     *
     * @author ROVAST
     */
    abstract public function update();
}
