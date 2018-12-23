<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$jinli = new \Rovast\DesignPatternTalk\Chapter24\v2\CommonManager('经理');
$zongjian = new \Rovast\DesignPatternTalk\Chapter24\v2\Majordomo('总监');
$zongjinli = new \Rovast\DesignPatternTalk\Chapter24\v2\GeneralManager('总经理');

$jinli->setSupervisor($zongjian);
$zongjian->setSupervisor($zongjinli);

$request1 = new \Rovast\DesignPatternTalk\Chapter24\v2\Request();
$request1->setRequestType('请假');
$request1->setRequestContent('小菜请假');
$request1->setNumber(1);
$jinli->requestApplication($request1);

$request2 = new \Rovast\DesignPatternTalk\Chapter24\v2\Request();
$request2->setRequestType('请假');
$request2->setRequestContent('小菜请假2');
$request2->setNumber(10);
$jinli->requestApplication($request2);

$request2 = new \Rovast\DesignPatternTalk\Chapter24\v2\Request();
$request2->setRequestType('加薪');
$request2->setRequestContent('小菜加薪');
$request2->setNumber(1000);
$jinli->requestApplication($request2);
