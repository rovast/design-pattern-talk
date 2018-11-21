<?php

namespace Rovast\DesignPatternTalk\Chapter8\v1;

use Rovast\DesignPatternTalk\Chapter8\v1\OperationDiv;

/**
 * Class DivFactory
 *
 * @package \Rovast\DesignPatternTalk\Chapter8\v1
 */
class DivFactory implements Factory
{
    public function createOperation()
    {
        return new OperationDiv();
    }
}
