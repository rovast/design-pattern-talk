<?php

namespace Rovast\DesignPatternTalk\Chapter1\v4;

/**
 * Class OperationAdd
 */
class OperationAdd extends Operation
{
    public function getResult()
    {
        return $this->getNumberA() + $this->getNumberB();
    }
}
