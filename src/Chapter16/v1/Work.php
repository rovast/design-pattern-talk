<?php

namespace Rovast\DesignPatternTalk\Chapter16\v1;

/**
 * Class Work
 *
 * @package \Rovast\DesignPatternTalk\Chapter16\v1
 */
class Work
{
    // 当前的工作时间
    protected $hour;

    // 当前工作是否完成
    protected $finished;

    /**
     * @param mixed $finished
     */
    public function setFinished($finished): void
    {
        $this->finished = $finished;
    }

    /**
     * @param mixed $hour
     */
    public function setHour($hour): void
    {
        $this->hour = $hour;
    }

    public function writeProgram()
    {
        if ($this->hour < 12) {
            echo "当前时间 {$this->hour}，上午工作，精神百倍" . PHP_EOL;
        } elseif ($this->hour < 13) {
            echo "当前时间 {$this->hour}, 小饿小困" . PHP_EOL;
        } elseif ($this->hour < 17) {
            echo "当前时间 {$this->hour}，下午的效率其实还可以" . PHP_EOL;
        } else {
            if ($this->finished) {
                echo "当前时间 {$this->hour}，下班回家了" . PHP_EOL;
            } else {
                if ($this->hour<21) {
                    echo "当前时间 {$this->hour}，加班真的是累哦" . PHP_EOL;
                } else {
                    echo "当前时间 {$this->hour}，不行了，要在公司打地铺了" . PHP_EOL;
                }
            }
        }
    }
}
