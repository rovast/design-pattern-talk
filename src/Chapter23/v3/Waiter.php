<?php

namespace Rovast\DesignPatternTalk\Chapter23\v3;

/**
 * Class Waiter
 *
 * @package \Rovast\DesignPatternTalk\Chapter23\v3
 */
class Waiter
{
    /**
     * @var  array command
     */
    private $commands = [];

    public function setOrder(Command $command)
    {
        array_push($this->commands, $command);
    }

    public function notify()
    {
        foreach ($this->commands as $command) {
            $command->executeCommand();
        }
    }

    public function cancelOrder()
    {
    }
}
