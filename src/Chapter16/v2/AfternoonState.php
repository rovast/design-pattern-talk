<?php

namespace Rovast\DesignPatternTalk\Chapter16\v2;

/**
 * Class AfternoonState.
 */
class AfternoonState extends State
{
    public function writeProgram(Work $work)
    {
        if ($work->getHour() < 17) {
            echo "当前时间 {$work->getHour()}，下午工作，效率尚可".PHP_EOL;
        } else {
            if ($work->getFinished()) {
                echo '下班了'.PHP_EOL;
            } else {
                $work->setState(new EveningState());
                $work->writeProgram();
            }
        }
    }
}
