<?php

namespace Rovast\DesignPatternTalk\Chapter14\v1;

/**
 * Class Secretary.
 */
class Secretary
{
    /**
     * @var array observers
     */
    private $observers = [];

    private $action = '';

    public function attach(StockObserver $observer)
    {
        array_push($this->observers, $observer);
    }

    public function notify()
    {
        echo '老板回来了！'.PHP_EOL;

        /*
         * @var \Rovast\DesignPatternTalk\Chapter14\v1\StockObserver
         */
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }

    public function setAction($action)
    {
        $this->action = $action;
    }
}
