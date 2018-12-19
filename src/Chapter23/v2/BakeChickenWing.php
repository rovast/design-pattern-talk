<?php

namespace Rovast\DesignPatternTalk\Chapter23\v2;

/**
 * Class BakeChickenWing
 *
 * @package \Rovast\DesignPatternTalk\Chapter23\v2
 */
class BakeChickenWing extends Command
{
    public function executeCommand()
    {
        $this->babercuer->BakeChickenWing();
    }
}
