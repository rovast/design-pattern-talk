<?php

namespace Rovast\DesignPatternTalk\Chapter14\v2;

/**
 * Class StockObserver.
 */
class StockObserver extends Observer
{
    public function update()
    {
        echo '关闭炒股软件，假装在认真干活'.PHP_EOL;
    }
}
