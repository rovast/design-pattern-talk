<?php

namespace Rovast\DesignPatternTalk\Chapter15\v5;

/**
 * Class AccessUser
 *
 * @package \Rovast\DesignPatternTalk\Chapter15\v5
 */
class AccessUser implements UserInterface
{
    public function insertUser(User $user)
    {
        echo 'access server 插入一个用户' . PHP_EOL;
    }

    public function getUser($id)
    {
        echo 'access server 查询一个用户'  . PHP_EOL;
    }
}
