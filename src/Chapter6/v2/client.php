<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$person = new \Rovast\DesignPatternTalk\Chapter6\v2\Person('Tom');

$f1 = new \Rovast\DesignPatternTalk\Chapter6\v2\TShirt();
$f2 = new \Rovast\DesignPatternTalk\Chapter6\v2\Tie();
$f3 = new \Rovast\DesignPatternTalk\Chapter6\v2\BigTrouser();

$f1->show();
$f2->show();
$f3->show();

$person->show();
