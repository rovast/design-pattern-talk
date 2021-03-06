<?php

namespace Rovast\DesignPatternTalk\Chapter8\v1;

/**
 * Class OperationSub.
 */
class OperationSub extends Operation
{
    public function getResult()
    {
        return $this->getNumberA() - $this->getNumberB();
    }
}
