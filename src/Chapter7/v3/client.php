<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$jiaojiao = new \Rovast\DesignPatternTalk\Chapter7\v3\SchoolGirl('jiaojiao');

$daili = new \Rovast\DesignPatternTalk\Chapter7\v3\Proxy($jiaojiao);
$daili->giveFlowers();
$daili->giveChocolate();
$daili->giveDolls();
