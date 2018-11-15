<?php

echo "请输入数字 A: ";
$A = trim(fgets(fopen("php://stdin", "r")));

echo "请选择运算符号（+、-、*、/）: ";
$O = trim(fgets(fopen("php://stdin", "r")));

echo "请输入数字 B: ";
$B = trim(fgets(fopen("php://stdin", "r")));

if ($O === '+') {
    $C = floatval($A) + floatval($B);
} elseif ($O === '-') {
    $C = floatval($A) - floatval($B);
} elseif ($O === '*') {
    $C = floatval($A) * floatval($B);
} elseif ($O === '/') {
    $C = floatval($A) / floatval($B);
}

echo "结果是: " . $C . PHP_EOL;
