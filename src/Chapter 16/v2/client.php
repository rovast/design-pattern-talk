<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$work = new \Rovast\DesignPatternTalk\Chapter16\v2\Work();

$work->setHour(10);
$work->writeProgram();

$work->setHour(14);
$work->writeProgram();

$work->setFinished(false);
$work->setHour(18);
$work->writeProgram();

$work->setHour(22);
$work->writeProgram();
