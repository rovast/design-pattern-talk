<?php
/**
 * Created by PhpStorm.
 * User: rovast
 * Date: 2018-12-24
 * Time: 21:54.
 */

namespace Rovast\DesignPatternTalk\Chapter25\v1;

class ConcreteColleague2 extends Colleague
{
    public function send(string $message)
    {
        $this->mediator->send($message, $this);
    }

    public function notify(string $message)
    {
        echo '同事2得到信息：'.$message.PHP_EOL;
    }
}
