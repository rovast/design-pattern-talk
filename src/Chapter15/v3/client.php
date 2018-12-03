<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$user = new \Rovast\DesignPatternTalk\Chapter15\v3\User();
$department = new \Rovast\DesignPatternTalk\Chapter15\v3\Department();

// sqlserver 驱动
$userDB = new \Rovast\DesignPatternTalk\Chapter15\v3\SqlserverUser();

// access 驱动
//$userDB = new \Rovast\DesignPatternTalk\Chapter15\v3\AccessUser();

$userDB->insertUser($user);
$userDB->getUser(10);


// sqlserver 驱动
$departmentDB = new \Rovast\DesignPatternTalk\Chapter15\v3\SqlServerDepartment();

// access 驱动
$departmentDB = new \Rovast\DesignPatternTalk\Chapter15\v3\AccessDepartment();

$departmentDB->insertDepartment($department);
$departmentDB->getDepartment(10);
