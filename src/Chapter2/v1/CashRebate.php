<?php

namespace Rovast\DesignPatternTalk\Chapter2\v1;

/**
 * Class CashRebate
 * 折扣收费
 *
 * @package \Rovast\DesignPatternTalk\Chapter2\v1
 */
class CashRebate extends CashSuper
{
    /**
     * 折扣
     *
     * @var  float rebate
     */
    private $rebate;

    public function __construct(float $rebate)
    {
        $this->rebate = $rebate;
    }

    public function acceptCrash(float $money)
    {
        return $money * $this->rebate;
    }
}
