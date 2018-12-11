<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$items = ['a', 'b', 'c', 'd', 'e', 'f'];

$concreteIterator = new \Rovast\DesignPatternTalk\Chapter20\v1\ConcreteIterator($items);

echo  $concreteIterator->first().PHP_EOL;
echo  $concreteIterator->next().PHP_EOL;
echo  $concreteIterator->next().PHP_EOL;
echo  $concreteIterator->next().PHP_EOL;
