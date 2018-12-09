<?php

namespace Rovast\DesignPatternTalk\Chapter8\v1;

/**
 * Class MulFactory.
 */
class MulFactory implements Factory
{
    public function createOperation()
    {
        return new OperationMul();
    }
}
