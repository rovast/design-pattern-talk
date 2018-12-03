<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$user = new \Rovast\DesignPatternTalk\Chapter15\v1\User();

$sqlServer = new \Rovast\DesignPatternTalk\Chapter15\v1\SqlserverUser();

// 插入一条记录
$sqlServer->insert($user);

// 获取一条用户信息
$user = $sqlServer->getUser(10);
