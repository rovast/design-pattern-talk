<?php

namespace Rovast\DesignPatternTalk\Chapter23\v2;

/**
 * Class BakeMuttonCommand.
 */
class BakeMuttonCommand extends Command
{
    public function executeCommand()
    {
        $this->babercuer->BakeMutton();
    }
}
