<?php

require_once __DIR__.'/../../../vendor/autoload.php';

// 影魔
$sf = new \Rovast\DesignPatternTalk\Chapter18\v2\GameRole();
$sf->getInitState();
$sf->displayState();

// 存档
$roleStateCaretaker = new \Rovast\DesignPatternTalk\Chapter18\v2\RoleStateCaretaker();
$roleStateCaretaker->setRoleStateMemo($sf->saveState());

// 干架
$sf->fight();
$sf->displayState();

// 读档
$sf->recoveryState($roleStateCaretaker->getRoleStateMomo());
$sf->displayState();
