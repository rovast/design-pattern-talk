<?php

namespace Rovast\DesignPatternTalk\Chapter8\v1;

/**
 * Class OperationAdd.
 */
class OperationAdd extends Operation
{
    public function getResult()
    {
        return $this->getNumberA() + $this->getNumberB();
    }
}
