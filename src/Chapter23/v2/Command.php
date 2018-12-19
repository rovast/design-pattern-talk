<?php

namespace Rovast\DesignPatternTalk\Chapter23\v2;

/**
 * Class Command.
 */
abstract class Command
{
    /**
     * @var \Rovast\DesignPatternTalk\Chapter23\v2\Barbecuer babercuer
     */
    protected $babercuer;

    public function __construct(Barbecuer $babercuer)
    {
        $this->babercuer = $babercuer;
    }

    abstract public function executeCommand();
}
