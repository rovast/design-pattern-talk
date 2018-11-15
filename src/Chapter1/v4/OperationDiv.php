<?php

namespace Rovast\DesignPatternTalk\Chapter1\v4;

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
