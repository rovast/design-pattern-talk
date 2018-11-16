<?php

namespace Rovast\DesignPatternTalk\Chapter2\v2;

/**
 * Class Context
 * 上下文.
 */
class Context
{
    /**
     * @var \Rovast\DesignPatternTalk\Chapter2\v2\Strategy strategy
     */
    public $strategy;

    /**
     * 初始化时传入策略对象
     *
     * @param \Rovast\DesignPatternTalk\Chapter2\v2\Strategy $strategy
     *
     * @author ROVAST
     */
    public function context(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * 根据不同的策略来实现具体的算法.
     *
     * @author ROVAST
     */
    public function contextInterface()
    {
        $this->strategy->algorithmInterface();
    }
}
