<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$pen = new Rovast\DesignPatternTalk\Chapter13\v3\Pen();

// 画一个胖小伙
$fatPersonBuilder = new \Rovast\DesignPatternTalk\Chapter13\v3\PersonFatBuilder($pen);
$fatPerson        = new \Rovast\DesignPatternTalk\Chapter13\v3\PersonDirector($fatPersonBuilder);

// 画一个瘦小伙儿
$thinPersonBuilder = new \Rovast\DesignPatternTalk\Chapter13\v3\PersonThinBuilder($pen);
$thinPerson        = new \Rovast\DesignPatternTalk\Chapter13\v3\PersonDirector($thinPersonBuilder);
