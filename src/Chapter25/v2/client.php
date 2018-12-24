<?php

require_once __DIR__.'/../../../vendor/autoload.php';

$UNSC = new \Rovast\DesignPatternTalk\Chapter25\v2\UnitedNationsSecurityCouncil();

$c1 = new \Rovast\DesignPatternTalk\Chapter25\v2\USA($UNSC);
$c2 = new \Rovast\DesignPatternTalk\Chapter25\v2\Iraq($UNSC);

$UNSC->setColleague1($c1);
$UNSC->setColleague2($c2);

$c1->declare('不要研究核武器了，不然，哼哼');
$c2->declare('我们没有核武器，呵呵');
