<?php

namespace Rovast\DesignPatternTalk\Chapter16\v2;

/**
 * Class ForenoonState
 *
 * @package \Rovast\DesignPatternTalk\Chapter16\v2
 */
class ForenoonState extends State
{
    public function writeProgram(Work $work)
    {
        if ($work->getHour() < 12) {
            echo "当前时间 {$work->getHour()}，工作精神着呢" . PHP_EOL;
        } else {
            $work->setState(new NoonState());
            $work->writeProgram();
        }
    }
}
