<?php

namespace Rovast\DesignPatternTalk\Chapter2\v2;

/**
 * Class ConcreteStrategyC
 * 策略 B 的具体实现
 */
class ConcreteStrategyC extends Strategy
{
    public function algorithmInterface()
    {
        echo "算法 C 的具体实现" . PHP_EOL;
    }
}
