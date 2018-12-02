<?php

namespace Rovast\DesignPatternTalk\Chapter14\v1;

/**
 * Class Observer.
 */
class StockObserver
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update()
    {
        echo "{$this->name} 关闭股票软件，去干活了".PHP_EOL;
    }
}
