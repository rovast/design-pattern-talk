<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$user = new \Rovast\DesignPatternTalk\Chapter15\v5\User();
$department = new \Rovast\DesignPatternTalk\Chapter15\v5\Department();

// 获取到操作数据的工厂，工厂类型由 DataAccess 的 dbDriver 决定
$dataAccess = new \Rovast\DesignPatternTalk\Chapter15\v5\DataAccess();

// user 相关操作
$userAccess = $dataAccess->createUser();
$userAccess->insertUser($user);
$userAccess->getUser(10);

// department 相关操作
$departmentAccess = $dataAccess->createDepartment();
$departmentAccess->insertDepartment($department);
$departmentAccess->getDepartment(10);
