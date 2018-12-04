<?php

namespace Rovast\DesignPatternTalk\Chapter2\v2;

/**
 * Class ConcreteStrategyB
 * 策略 B 的具体实现.
 */
class ConcreteStrategyB extends Strategy
{
    public function algorithmInterface()
    {
        echo '算法 B 的具体实现'.PHP_EOL;
    }
}
