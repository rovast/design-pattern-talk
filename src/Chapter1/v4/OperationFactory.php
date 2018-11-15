<?php

namespace Rovast\DesignPatternTalk\Chapter1\v4;

/**
 * Class OperationFactory.
 */
class OperationFactory
{
    public static function createOperate(string $operate)
    {
        switch ($operate) {
            case '+':
                $operateClass = new OperationAdd();

                break;
            case '-':
                $operateClass = new OperationSub();

                break;
            case '*':
                $operateClass = new OperationMul();

                break;
            case '/':
                $operateClass = new OperationDiv();

                break;
            default:
                throw new \Exception('错误的运算类型');
        }

        return $operateClass;
    }
}
