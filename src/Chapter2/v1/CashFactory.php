<?php

namespace Rovast\DesignPatternTalk\Chapter2\v1;

/**
 * Class CashFactory
 *
 */
class CashFactory
{
    public static function createCashAccept(string $type)
    {
        $map = [
          'normal' => CashNormal::class,
          'rebate' => CashRebate::class,
          'return' => CashReturn::class
        ];

        return $map[strtolower($type)];
    }
}
