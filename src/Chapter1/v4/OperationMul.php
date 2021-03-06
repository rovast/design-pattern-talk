<?php

namespace Rovast\DesignPatternTalk\Chapter1\v4;

/**
 * Class OperationMul.
 */
class OperationMul extends Operation
{
    public function getResult()
    {
        return $this->getNumberA() * $this->getNumberB();
    }
}
