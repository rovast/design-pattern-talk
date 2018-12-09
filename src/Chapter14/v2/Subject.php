<?php

namespace Rovast\DesignPatternTalk\Chapter14\v2;

/**
 * Abstract Class Subject.
 */
abstract class Subject
{
    /**
     * 增加观察者.
     *
     * @param \Rovast\DesignPatternTalk\Chapter14\v2\Observer $observer
     *
     * @return mixed
     *
     * @author ROVAST
     */
    abstract public function attach(Observer $observer);

    /**
     * 删除观察者.
     *
     * @param \Rovast\DesignPatternTalk\Chapter14\v2\Observer $observer
     *
     * @return mixed
     *
     * @author ROVAST
     */
    abstract public function detach(Observer $observer);

    /**
     * 通知.
     *
     * @return mixed
     *
     * @author ROVAST
     */
    abstract public function notify();
}
