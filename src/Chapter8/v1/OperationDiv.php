<?php

namespace Rovast\DesignPatternTalk\Chapter8\v1;

/**
 * Class OperationDiv.
 */
class OperationDiv extends Operation
{
    public function getResult()
    {
        return $this->getNumberA() / $this->getNumberB();
    }
}
