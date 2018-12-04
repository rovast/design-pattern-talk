<?php

namespace Rovast\DesignPatternTalk\Chapter8\v1;

/**
 * Class SubFactory.
 */
class SubFactory implements Factory
{
    public function createOperation()
    {
        return new OperationSub();
    }
}
