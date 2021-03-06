<?php

namespace Rovast\DesignPatternTalk\Chapter15\v4;

/**
 * Class SqlserverUser.
 */
class AccessUser implements UserInterface
{
    public function insertUser(User $user)
    {
        echo 'access server 插入一个用户'.PHP_EOL;
    }

    public function getUser($id)
    {
        echo 'access server 查询一个用户'.PHP_EOL;
    }
}
