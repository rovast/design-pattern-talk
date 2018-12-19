<?php

namespace Rovast\DesignPatternTalk\Chapter23\v3;

/**
 * Class BakeChickenWing
 *
 * @package \Rovast\DesignPatternTalk\Chapter23\v3
 */
class BakeChickenWing extends Command
{
    public function executeCommand()
    {
        $this->babercuer->BakeChickenWing();
    }
}
