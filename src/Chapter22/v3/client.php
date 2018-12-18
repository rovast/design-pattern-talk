<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$gameN  = new \Rovast\DesignPatternTalk\Chapter22\v3\HandsetNGame();
$gameN->run();

$gameM  = new \Rovast\DesignPatternTalk\Chapter22\v3\HandsetMGame();
$gameM->run();

$gameN  = new \Rovast\DesignPatternTalk\Chapter22\v3\HandsetNAddressList();
$gameN->run();

$gameM  = new \Rovast\DesignPatternTalk\Chapter22\v3\HandsetMAddressList();
$gameM->run();
