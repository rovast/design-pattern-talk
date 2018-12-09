<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$person = new \Rovast\DesignPatternTalk\Chapter6\v1\Person('小菜');

echo '第一种装扮'.PHP_EOL;

$person->wearBigTrouser();
$person->wearSneakers();
$person->wearTie();
$person->show();

echo PHP_EOL.'第二种装扮'.PHP_EOL;

$person->wearTShirts();
$person->wearLeatherShoes();
$person->wearSneakers();
$person->show();
