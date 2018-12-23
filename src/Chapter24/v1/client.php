<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$jinli = new \Rovast\DesignPatternTalk\Chapter24\v1\Manager('经理');
$zongjian = new \Rovast\DesignPatternTalk\Chapter24\v1\Manager('总监');
$zongjinli = new \Rovast\DesignPatternTalk\Chapter24\v1\Manager('总经理');

$request = new \Rovast\DesignPatternTalk\Chapter24\v1\Request();
$request->setRequestType('加薪');
$request->setNumber(1000);

$jinli->getResult('经理', $request);
$zongjian->getResult('总监', $request);
$zongjinli->getResult('总经理', $request);

$request = new \Rovast\DesignPatternTalk\Chapter24\v1\Request();
$request->setRequestType('请假');
$request->setNumber(3);

$jinli->getResult('经理', $request);
$zongjian->getResult('总监', $request);
$zongjinli->getResult('总经理', $request);
