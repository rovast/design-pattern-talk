<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$factory = new \Rovast\DesignPatternTalk\Chapter8\v2\SimpleFactory();

$studentA = $factory->createLeifeng('学生');
$studentA->wash();

$volunteer = $factory->createLeifeng('志愿者');
$volunteer->sweep();
