<?php

namespace Rovast\DesignPatternTalk\Chapter8\v1;

/**
 * Class DivFactory.
 */
class DivFactory implements Factory
{
    public function createOperation()
    {
        return new OperationDiv();
    }
}
