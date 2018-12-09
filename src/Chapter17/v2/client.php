<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$a = new \Rovast\DesignPatternTalk\Chapter17\v2\Forwards('阿泰斯特');
$m = new \Rovast\DesignPatternTalk\Chapter17\v2\Guards('麦迪');
$y = new \Rovast\DesignPatternTalk\Chapter17\v2\Translator('姚明');

$a->defense();
$m->attack();
$y->attack();
$y->defense();
