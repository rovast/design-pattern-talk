<?php

require_once __DIR__ . "/../../../vendor/autoload.php";


try {
    echo "请输入数字 A: ";
    $numberA = trim(fgets(fopen("php://stdin", "r")));

    echo "请选择运算符号（+、-、*、/）: ";
    $operate = trim(fgets(fopen("php://stdin", "r")));

    echo "请输入数字 B: ";
    $numberB = trim(fgets(fopen("php://stdin", "r")));

    $operateClass = \Rovast\DesignPatternTalk\Chapter1\v4\OperationFactory::createOperate($operate);
    $operateClass->setNumberA($numberA);
    $operateClass->setNumberB($numberB);

    echo "结果：" . $operateClass->getResult() . PHP_EOL;

} catch (\Exception $e) {
    echo "输入有误， " . $e->getMessage() . PHP_EOL;
}
