<?php
/**
 * Created by PhpStorm.
 * User: rovast
 * Date: 2018-12-24
 * Time: 22:20
 */

namespace Rovast\DesignPatternTalk\Chapter25\v2;

class Iraq extends Country
{
    public function declare(string $message)
    {
        $this->mediator->declare($message, $this);
    }

    public function getMessage(string $message)
    {
        echo '伊拉克获得对方信息：' . $message . PHP_EOL;
    }
}
