<?php

namespace Rovast\DesignPatternTalk\Chapter1\v4;

/**
 * Class Operation.
 */
abstract class Operation
{
    /**
     * @var float numberA
     */
    private $numberA;

    /**
     * @var float numberB
     */
    private $numberB;

    public function setNumberA($variable)
    {
        $this->numberA = $variable;
    }

    public function setNumberB($variable)
    {
        $this->numberB = $variable;
    }

    public function getNumberA()
    {
        return $this->numberA;
    }

    public function getNumberB()
    {
        return $this->numberB;
    }

    abstract public function getResult();
}
