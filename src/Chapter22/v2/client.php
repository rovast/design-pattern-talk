<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$gameN = new \Rovast\DesignPatternTalk\Chapter22\v2\HandsetNGame();
$gameN->run();

$gameM = new \Rovast\DesignPatternTalk\Chapter22\v2\HandsetMGame();
$gameM->run();
