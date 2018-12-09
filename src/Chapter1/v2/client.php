<?php

try {
    echo '请输入数字 A: ';
    $numberA = trim(fgets(fopen('php://stdin', 'r')));

    echo '请选择运算符号（+、-、*、/）: ';
    $operation = trim(fgets(fopen('php://stdin', 'r')));

    echo '请输入数字 B: ';
    $numberB = trim(fgets(fopen('php://stdin', 'r')));

    switch ($operation) {
        case '+':
            $result = floatval($numberA) + floatval($numberB);

            break;
        case '-':
            $result = floatval($numberA) - floatval($numberB);

            break;
        case '*':
            $result = floatval($numberA) * floatval($numberB);

            break;
        case '/':
            if (0 === intval($numberB)) {
                $result = '除数不能为0';
            } else {
                $result = floatval($numberA) / floatval($numberB);
            }

            break;
        default:
            $result = '请输入正确的运算符号';
    }

    echo '结果是: '.$result.PHP_EOL;
} catch (\Exception $e) {
    echo '输入有误， '.$e->getMessage().PHP_EOL;
}
