<?php

require_once __DIR__.'/../../../vendor/autoload.php';

// 画一个小人
$pen = new Rovast\DesignPatternTalk\Chapter13\v1\Pen();
$pen->draw('head');
$pen->draw('hands');
$pen->draw('legs');
$pen->draw('foots');
