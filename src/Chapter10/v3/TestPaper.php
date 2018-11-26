<?php

namespace Rovast\DesignPatternTalk\Chapter10\v3;

/**
 * Class TestPaper
 *
 * @package \Rovast\DesignPatternTalk\Chapter10\v3
 */
abstract class TestPaper
{
    public function question1()
    {
        echo 'Q1: 中国首都是哪？' . $this->answer1() . PHP_EOL;
    }

    abstract protected function answer1();

    public function question2()
    {
        echo 'Q2: 印度的首都是啥？' . $this->answer2() . PHP_EOL;
    }

    abstract protected function answer2();

    public function question3()
    {
        echo 'Q3: 美国的首都是啥？' . $this->answer3() . PHP_EOL;
    }

    abstract protected function answer3();
}
