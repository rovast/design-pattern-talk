<?php

namespace Rovast\DesignPatternTalk\Chapter8\v1;

/**
 * Class AddFactory.
 */
class AddFactory implements Factory
{
    public function createOperation()
    {
        return new OperationAdd();
    }
}
