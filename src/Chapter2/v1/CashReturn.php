<?php

namespace Rovast\DesignPatternTalk\Chapter2\v1;

/**
 * Class CashReturn
 * 满减
 */
class CashReturn extends CashSuper
{
    /**
     * 满足的金额
     * @var  float moneyCondition
     */
    private $moneyCondition;

    /**
     * 满减的金额
     * @var  float moneyReturn
     */
    private $moneyReturn;

    /**
     * 设定满减的规则，如：满 300 减 100
     * @param float $condition 300
     * @param float $return 100
     * @author ROVAST
     */
    public function cashReturn(float $condition, float $return)
    {
        $this->moneyCondition = $condition;
        $this->moneyReturn = $return;
    }

    public function acceptCrash($money)
    {
        if ($money >= $this->moneyCondition) {
            return $money - $this->moneyReturn;
        }

        return $money;
    }
}
