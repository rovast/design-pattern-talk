<?php

namespace Rovast\DesignPatternTalk\Chapter23\v2;

/**
 * Class Waiter.
 */
class Waiter
{
    /**
     * @var \Rovast\DesignPatternTalk\Chapter23\v2\Command command
     */
    private $command;

    public function setOrder(Command $command)
    {
        $this->command = $command;
    }

    public function notify()
    {
        $this->command->executeCommand();
    }
}
