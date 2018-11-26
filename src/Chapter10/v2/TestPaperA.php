<?php

namespace Rovast\DesignPatternTalk\Chapter10\v2;

/**
 * Class TestPaperA.
 */
class TestPaperA extends TestPaper
{
    public function question1()
    {
        parent::question1();
        echo ' 答：北京'.PHP_EOL;
    }

    public function question2()
    {
        parent::question2();
        echo '答：新德里'.PHP_EOL;
    }

    public function question3()
    {
        parent::question3();
        echo '答：华盛顿'.PHP_EOL;
    }
}
