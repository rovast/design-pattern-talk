<?php

namespace Rovast\DesignPatternTalk\Chapter15\v4;

/**
 * Class SqlserverUser
 *
 * @package \Rovast\DesignPatternTalk\Chapter15\v4
 */
class SqlserverUser implements UserInterface
{
    public function insertUser(User $user)
    {
        echo 'sql server 插入一个用户' . PHP_EOL;
    }

    public function getUser($id)
    {
        echo 'sql server 查询一个用户'  . PHP_EOL;
    }
}
