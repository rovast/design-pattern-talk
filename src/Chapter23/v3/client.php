<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$boy = new \Rovast\DesignPatternTalk\Chapter23\v3\Barbecuer();

$bakeMutton = new \Rovast\DesignPatternTalk\Chapter23\v3\BakeMuttonCommand($boy);
$bakeChickenWing = new \Rovast\DesignPatternTalk\Chapter23\v3\BakeChickenWing($boy);

$girl = new \Rovast\DesignPatternTalk\Chapter23\v3\Waiter();

$girl->setOrder($bakeMutton);
$girl->setOrder($bakeChickenWing);
$girl->notify();
