<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$user       = new \Rovast\DesignPatternTalk\Chapter15\v3\User();
$department = new \Rovast\DesignPatternTalk\Chapter15\v3\Department();

// sqlserver 驱动
$factory = new \Rovast\DesignPatternTalk\Chapter15\v3\SqlserverFactory();

// access 驱动
// $factory = new \Rovast\DesignPatternTalk\Chapter15\v3\AccessFactory();

// 进行 user 相关的操作
$userFactory = $factory->createUser();
$userFactory->insertUser($user);
$userFactory->getUser(10);

// 进行 department 相关的操作
$departmentFactory = $factory->createDepartment();
$departmentFactory->insertDepartment($department);
$departmentFactory->getDepartment(10);
