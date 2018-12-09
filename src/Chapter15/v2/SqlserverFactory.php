<?php

namespace Rovast\DesignPatternTalk\Chapter15\v2;

/**
 * Class SqlserverFactory.
 */
class SqlserverFactory implements UserFactory
{
    public function getFactory()
    {
        return new SqlserverUser();
    }
}
