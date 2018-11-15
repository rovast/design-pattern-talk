<?php

require_once __DIR__ . "/Operation.php";

try {
    echo "请输入数字 A: ";
    $numberA = trim(fgets(fopen("php://stdin", "r")));

    echo "请选择运算符号（+、-、*、/）: ";
    $operate = trim(fgets(fopen("php://stdin", "r")));

    echo "请输入数字 B: ";
    $numberB = trim(fgets(fopen("php://stdin", "r")));

    $Operation = new \Rovast\DesignPatternTalk\Chapter1\v3\Operation();
    $result = $Operation->getResult($numberA, $numberB, $operate);

    echo "结果是: " . $result . PHP_EOL;
} catch (\Exception $e) {
    echo "输入有误， " . $e->getMessage() . PHP_EOL;
}
