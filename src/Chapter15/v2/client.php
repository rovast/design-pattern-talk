<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$user = new \Rovast\DesignPatternTalk\Chapter15\v2\User();

// 创建一个数据库工厂
$factory = new \Rovast\DesignPatternTalk\Chapter15\v2\SqlserverFactory(); // sqlserver

//$factory = new \Rovast\DesignPatternTalk\Chapter15\v2\AccessFactory(); //access

$dbFactory = $factory->getFactory();

// 新增提条记录
$dbFactory->insert($user);

// 获取一条记录
$dbFactory->get(10);
