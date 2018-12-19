<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$boy = new \Rovast\DesignPatternTalk\Chapter23\v2\Barbecuer();

$bakeMutton      = new \Rovast\DesignPatternTalk\Chapter23\v2\BakeMuttonCommand($boy);
$bakeChickenWing = new \Rovast\DesignPatternTalk\Chapter23\v2\BakeChickenWing($boy);

$girl = new \Rovast\DesignPatternTalk\Chapter23\v2\Waiter();

$girl->setOrder($bakeMutton);
$girl->notify();

$girl->setOrder($bakeMutton);
$girl->notify();

$girl->setOrder($bakeChickenWing);
$girl->notify();
