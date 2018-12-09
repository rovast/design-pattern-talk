<?php

require_once __DIR__.'/../../../vendor/autoload.php';

echo '学生A 抄的试卷'.PHP_EOL;
$testPaperA = new \Rovast\DesignPatternTalk\Chapter10\v1\TestPaperA();
$testPaperA->question1();
$testPaperA->question2();
$testPaperA->question3();

echo '学生B 抄的试卷'.PHP_EOL;
$testPaperB = new \Rovast\DesignPatternTalk\Chapter10\v1\TestPaperB();
$testPaperB->question1();
$testPaperB->question2();
$testPaperB->question3();
