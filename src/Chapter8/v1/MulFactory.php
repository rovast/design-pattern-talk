<?php

namespace Rovast\DesignPatternTalk\Chapter8\v1;

use Rovast\DesignPatternTalk\Chapter8\v1\OperationMul;

/**
 * Class MulFactory
 *
 * @package \Rovast\DesignPatternTalk\Chapter8\v1
 */
class MulFactory implements Factory
{
    public function createOperation()
    {
        return new OperationMul();
    }
}
