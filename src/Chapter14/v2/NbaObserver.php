<?php

namespace Rovast\DesignPatternTalk\Chapter14\v2;

/**
 * Class NbaObserver.
 */
class NbaObserver extends Observer
{
    public function update()
    {
        echo '关闭视频软件，假装在认真干活'.PHP_EOL;
    }
}
