<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$addOperation = new \Rovast\DesignPatternTalk\Chapter8\v1\AddFactory();
$operate      = $addOperation->createOperation();

$operate->setNumberA(10);
$operate->setNumberB(24);

echo $operate->getResult();
