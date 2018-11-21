<?php

namespace Rovast\DesignPatternTalk\Chapter8\v2;

/**
 * Class Leifeng.
 */
abstract class Leifeng
{
    public function sweep()
    {
        echo '扫地'.PHP_EOL;
    }

    public function wash()
    {
        echo '洗衣'.PHP_EOL;
    }

    public function buyRice()
    {
        echo '买米'.PHP_EOL;
    }
}
