<?php

namespace Rovast\DesignPatternTalk\Chapter1\v3;

/**
 * Class Operation
 *
 * @package \Rovast\DesignPatternTalk\Chapter1\v3
 */
class Operation
{
    /**
     * @param float  $numberA
     * @param float  $numberB
     * @param string $operate
     * @return float|int|string
     * @author ROVAST
     */
    public function getResult(float $numberA, float $numberB, string $operate)
    {
        switch ($operate) {
            case "+":
                $result = $numberA + $numberB;
                break;
            case "-":
                $result = $numberA - $numberB;
                break;
            case "*":
                $result = $numberA * $numberB;
                break;
            case "/":
                if (0 === intval($numberB)) {
                    $result = "除数不能为0";
                } else {
                    $result = $numberA / $numberB;
                }
                break;
            default:
                $result = "请输入正确的运算符号";
        }

        return $result;
    }
}