<?php

namespace Rovast\DesignPatternTalk\Chapter15\v2;

/**
 * Class SqlserverFactory
 *
 * @package \Rovast\DesignPatternTalk\Chapter15\v2
 */
class SqlserverFactory implements UserFactory
{
    public function getFactory()
    {
        return new SqlserverUser();
    }
}
