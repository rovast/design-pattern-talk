<?php

namespace Rovast\DesignPatternTalk\Chapter2\v1;

/**
 * Class CashNormal
 * 正常收费.
 */
class CashNormal extends CashSuper
{
    /**
     * 正常收费，直接返回金额即可.
     *
     * @param float $money
     *
     * @return float
     *
     * @author ROVAST
     */
    public function acceptCrash(float $money)
    {
        return $money;
    }
}
