<?php

namespace Rovast\DesignPatternTalk\Chapter23\v3;

/**
 * Class BakeMuttonCommand
 *
 * @package \Rovast\DesignPatternTalk\Chapter23\v3
 */
class BakeMuttonCommand extends Command
{
    public function executeCommand()
    {
        $this->babercuer->BakeMutton();
    }
}
