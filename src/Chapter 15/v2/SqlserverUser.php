<?php

namespace Rovast\DesignPatternTalk\Chapter15\v2;

/**
 * Class SqlserverUser.
 */
class SqlserverUser implements UserInterface
{
    public function insert(User $user)
    {
        echo '使用 SQL Server 增加一条用户记录'.PHP_EOL;
    }

    public function get(int $id)
    {
        echo '在 SQL Server 查询一条用户记录'.PHP_EOL;

        return 'new user class';
    }
}
