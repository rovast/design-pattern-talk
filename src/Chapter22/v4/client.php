<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$brandN = new \Rovast\DesignPatternTalk\Chapter22\v4\HandbrandN();

$brandN->setHandsetSoft(new \Rovast\DesignPatternTalk\Chapter22\v4\HandsetGame());
$brandN->run();

$brandN->setHandsetSoft(new \Rovast\DesignPatternTalk\Chapter22\v4\HandsetAddressList());
$brandN->run();
