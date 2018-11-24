<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$resume1 = new \Rovast\DesignPatternTalk\Chapter9\v1\Resume('大鸟');
$resume1->setPersonalInfo('xxx公司', 29);

$resume2 = new \Rovast\DesignPatternTalk\Chapter9\v1\Resume('大鸟');
$resume2->setPersonalInfo('xxx公司', 29);

$resume3 = new \Rovast\DesignPatternTalk\Chapter9\v1\Resume('大鸟');
$resume3->setPersonalInfo('xxx公司', 29);

$resume1->display();
$resume2->display();
$resume3->display();
