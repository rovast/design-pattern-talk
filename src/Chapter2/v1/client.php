<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$type = 'normal';

// 正常收费的
$cashObject = new \Rovast\DesignPatternTalk\Chapter2\v1\CashNormal();
$shouldPay  = $cashObject->acceptCrash(100);
echo "应收款：100，实际收款：{$shouldPay}".PHP_EOL;

// 打折收费
$cashRebateObject = new \Rovast\DesignPatternTalk\Chapter2\v1\CashRebate(0.6);
$shouldPay        = $cashRebateObject->acceptCrash(300);
echo "应收款：300，实际收款：{$shouldPay}".PHP_EOL;

// 满300减100
$cashReturn = new \Rovast\DesignPatternTalk\Chapter2\v1\CashReturn();
$cashReturn->cashReturn(300, 100);
$shouldPay = $cashReturn->acceptCrash(500);
echo "应收款：500，实际收款：{$shouldPay}".PHP_EOL;
