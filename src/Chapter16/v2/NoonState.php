<?php

namespace Rovast\DesignPatternTalk\Chapter16\v2;

/**
 * Class NoonState.
 */
class NoonState extends State
{
    public function writeProgram(Work $work)
    {
        if ($work->getHour() < 13) {
            echo "当前时间 {$work->getHour()}，小饿小困".PHP_EOL;
        } else {
            $work->setState(new AfternoonState());
            $work->writeProgram();
        }
    }
}
