<?php

require_once __DIR__.'/../../../vendor/autoload.php';

// 影魔
$sf = new \Rovast\DesignPatternTalk\Chapter18\v1\GameRole();
$sf->getInitState();
$sf->displayState();

// 备份
$backup = new \Rovast\DesignPatternTalk\Chapter18\v1\GameRole();
$backup->setLife($sf->getLife());
$backup->setAttack($sf->getAttack());
$backup->setDefense($sf->getDefense());

// 干架
$sf->fight();
$sf->displayState();

// 恢复备份
$sf->setLife($backup->getLife());
$sf->setAttack($backup->getAttack());
$sf->setDefense($backup->getDefense());
$sf->displayState();
