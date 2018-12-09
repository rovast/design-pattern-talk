<?php

namespace Rovast\DesignPatternTalk\Chapter2\v2;

/**
 * Class ConcreteStrategyA
 * 策略 A 的具体实现.
 */
class ConcreteStrategyA extends Strategy
{
    public function algorithmInterface()
    {
        echo '算法 A 的具体实现'.PHP_EOL;
    }
}
