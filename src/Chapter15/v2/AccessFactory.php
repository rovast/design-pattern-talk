<?php

namespace Rovast\DesignPatternTalk\Chapter15\v2;

/**
 * Class AccessFactory
 *
 * @package \Rovast\DesignPatternTalk\Chapter15\v2
 */
class AccessFactory implements UserFactory
{
    public function getFactory()
    {
        return new AccessUser();
    }
}
