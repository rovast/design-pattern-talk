<?php

namespace Rovast\DesignPatternTalk\Chapter15\v2;

/**
 * interface UserFactory
 *
 * @package \Rovast\DesignPatternTalk\Chapter15\v2
 */
interface UserFactory
{
    /**
     * 创建一个用户
     * @return mixed
     * @author ROVAST
     * @return \Rovast\DesignPatternTalk\Chapter15\v2\User
     */
    public function getFactory();
}
