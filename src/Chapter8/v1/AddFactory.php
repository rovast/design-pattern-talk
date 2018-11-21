<?php

namespace Rovast\DesignPatternTalk\Chapter8\v1;

use Rovast\DesignPatternTalk\Chapter8\v1\OperationAdd;

/**
 * Class AddFactory
 *
 * @package \Rovast\DesignPatternTalk\Chapter8\v1
 */
class AddFactory implements Factory
{
    public function createOperation()
    {
        return new OperationAdd();
    }
}
