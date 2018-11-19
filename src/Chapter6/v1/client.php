<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$persion = new \Rovast\DesignPatternTalk\Chapter6\v1\Person('小菜');

echo '第一种装扮' . PHP_EOL;

$persion->wearBigTrouser();
$persion->wearSneakers();
$persion->wearTie();
$persion->show();

echo PHP_EOL . '第二种装扮' . PHP_EOL;

$persion->wearTShirts();
$persion->wearLeatherShoes();
$persion->wearSneakers();
$persion->show();
