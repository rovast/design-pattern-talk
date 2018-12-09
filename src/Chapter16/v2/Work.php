<?php

namespace Rovast\DesignPatternTalk\Chapter16\v2;

/**
 * Class Work.
 */
class Work
{
    // 当前的工作时间
    protected $hour;

    // 当前工作是否完成
    protected $finished;

    /**
     * @var \Rovast\DesignPatternTalk\Chapter16\v2\State state
     */
    protected $state;

    /**
     * 初始化为上午的状态
     * Work constructor.
     */
    public function __construct()
    {
        $this->setState(new ForenoonState());
    }

    /**
     * @param mixed $finished
     */
    public function setFinished($finished): void
    {
        $this->finished = $finished;
    }

    /**
     * @return mixed
     */
    public function getFinished()
    {
        return $this->finished;
    }

    /**
     * @param mixed $hour
     */
    public function setHour($hour): void
    {
        $this->hour = $hour;
    }

    /**
     * @param mixed $state
     */
    public function setState(State $state): void
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getHour()
    {
        return $this->hour;
    }

    public function writeProgram()
    {
        $this->state->writeProgram($this);
    }
}
