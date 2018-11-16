<?php

namespace Rovast\DesignPatternTalk\Chapter2\v1;

/**
 * Class CashSuper
 * 收款的抽象类
 */
abstract class CashSuper
{
    abstract public function acceptCrash(float $money);
}
