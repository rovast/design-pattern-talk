<?php

namespace Rovast\DesignPatternTalk\Chapter8\v1;

use Rovast\DesignPatternTalk\Chapter8\v1\OperationSub;

/**
 * Class SubFactory
 *
 * @package \Rovast\DesignPatternTalk\Chapter8\v1
 */
class SubFactory implements Factory
{
    public function createOperation()
    {
        return new OperationSub();
    }
}
