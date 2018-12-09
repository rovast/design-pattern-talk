<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$a = new \Rovast\DesignPatternTalk\Chapter17\v1\Forwards('阿泰斯特');
$m = new \Rovast\DesignPatternTalk\Chapter17\v1\Guards('麦迪');
$y = new \Rovast\DesignPatternTalk\Chapter17\v1\Center('姚明');

$a->defense();
$m->attack();
$y->attack();
$y->defense();
