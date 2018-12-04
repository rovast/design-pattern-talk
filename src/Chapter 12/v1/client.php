<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$guy1 = new \Rovast\DesignPatternTalk\Chapter12\v1\Stock1();
$guy2 = new \Rovast\DesignPatternTalk\Chapter12\v1\Stock2();
$guy3 = new \Rovast\DesignPatternTalk\Chapter12\v1\Stock3();
$boy1 = new \Rovast\DesignPatternTalk\Chapter12\v1\NationDebt1();
$man1 = new \Rovast\DesignPatternTalk\Chapter12\v1\Realty1();

$guy1->buy();
$guy2->buy();
$guy3->buy();
$boy1->buy();
$man1->buy();

$guy1->sell();
$guy2->sell();
$guy3->sell();
$boy1->sell();
$man1->sell();
