<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$res = \Rovast\DesignPatternTalk\Chapter21\v1\MySql::getInstance()->query('a');
echo $res.PHP_EOL;

$res = \Rovast\DesignPatternTalk\Chapter21\v1\MySql::getInstance()->query('b');
echo $res.PHP_EOL;

$res = \Rovast\DesignPatternTalk\Chapter21\v1\MySql::getInstance()->query('c');
echo $res.PHP_EOL;
