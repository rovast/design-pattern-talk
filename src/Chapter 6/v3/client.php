<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$person = new \Rovast\DesignPatternTalk\Chapter6\v3\Person('Tom');

$f1 = new \Rovast\DesignPatternTalk\Chapter6\v3\TShirts();
$f2 = new \Rovast\DesignPatternTalk\Chapter6\v3\Tie();

$person->decorate($f1);
$person->decorate($f2);
$person->show();
