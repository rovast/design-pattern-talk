<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$resume1 = new \Rovast\DesignPatternTalk\Chapter9\v2\Resume('大鸟');
$resume1->setPersonalInfo('男', 29);
$resume1->setWorkExperience('1991-1992', 'X公司');

$resume2 = $resume1->clone();
$resume2->setWorkExperience('1992-1994', 'Y公司');

$resume3 = $resume1->clone();
$resume3->setWorkExperience('1994-1995', 'Z公司');

$resume1->display();
$resume2->display();
$resume3->display();
