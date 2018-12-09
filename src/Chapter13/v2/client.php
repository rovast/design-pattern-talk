<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$pen = new Rovast\DesignPatternTalk\Chapter13\v2\Pen();

// 画一个小人
$thinPerson = new Rovast\DesignPatternTalk\Chapter13\v2\PersonFatBuilder($pen);
$thinPerson->build();

// 再画一个
$fatPerson = new Rovast\DesignPatternTalk\Chapter13\v2\PersonThinBuilder($pen);
$fatPerson->build();
