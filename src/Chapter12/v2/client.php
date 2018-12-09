<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$fund = new \Rovast\DesignPatternTalk\Chapter12\v2\Fund();
$fund->buy();
$fund->sell();
