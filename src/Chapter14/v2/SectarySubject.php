<?php

namespace Rovast\DesignPatternTalk\Chapter14\v2;

/**
 * Class SectarySubject.
 */
class SectarySubject extends Subject
{
    protected $observers = [];

    public function attach(Observer $observer)
    {
        array_push($this->observers, $observer);
    }

    public function detach(Observer $observer)
    {
        $key = array_search($observer, $this->observers);
        if (false !== $key) {
            unset($this->observers[$key]);
        }
    }

    public function notify()
    {
        /*
         * @var \Rovast\DesignPatternTalk\Chapter14\v2\Observer
         */
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}
