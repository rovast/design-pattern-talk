<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$jiaojiao = new \Rovast\DesignPatternTalk\Chapter7\v1\SchoolGirl('jiaojiao');

$zhuojiayi = new \Rovast\DesignPatternTalk\Chapter7\v1\Pursuit($jiaojiao);
$zhuojiayi->giveFlowers();
$zhuojiayi->giveChocolate();
$zhuojiayi->giveDolls();
