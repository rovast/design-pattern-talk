<?php

require_once __DIR__.'/../../../vendor/autoload.php';

// 前台小妹妹
$tongzizzhe = new \Rovast\DesignPatternTalk\Chapter14\v1\Secretary();

// 股票同事
$tongzhi1 = new \Rovast\DesignPatternTalk\Chapter14\v1\StockObserver('同志1');
$tongzhi2 = new \Rovast\DesignPatternTalk\Chapter14\v1\StockObserver('同志2');

$tongzizzhe->attach($tongzhi1);
$tongzizzhe->attach($tongzhi2);

$tongzizzhe->setAction('老板回来了！');
$tongzizzhe->notify();
