<?php

namespace Rovast\DesignPatternTalk\Chapter16\v2;

/**
 * Class EveningState.
 */
class EveningState extends State
{
    public function writeProgram(Work $work)
    {
        if ($work->getHour() < 22) {
            echo "当前时间 {$work->getHour()}，加班啊，难受".PHP_EOL;
        } else {
            echo "当前时间 {$work->getHour()}，完了，睡着了都".PHP_EOL;
        }
    }
}
