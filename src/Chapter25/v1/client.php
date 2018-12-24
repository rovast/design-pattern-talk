<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$m = new \Rovast\DesignPatternTalk\Chapter25\v1\ConcreteMediator();

$c1 = new \Rovast\DesignPatternTalk\Chapter25\v1\ConcreteColleague1($m);
$c2 = new \Rovast\DesignPatternTalk\Chapter25\v1\ConcreteColleague2($m);

$m->setConcreteColleague1($c1);
$m->setConcreteColleague2($c2);

$c1->send('吃了么？');
$c2->send('没有呢，你打算请客？');
