<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$tongzhi1 = new \Rovast\DesignPatternTalk\Chapter14\v2\StockObserver('股票同志');
$tongzhi2 = new \Rovast\DesignPatternTalk\Chapter14\v2\NbaObserver('看球同志');

$qiantai = new \Rovast\DesignPatternTalk\Chapter14\v2\SectarySubject();
$qiantai->attach($tongzhi1);
$qiantai->attach($tongzhi2);

$qiantai->detach($tongzhi1);

$qiantai->notify();
