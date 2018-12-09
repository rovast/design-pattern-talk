<?php

namespace Rovast\DesignPatternTalk\Chapter15\v1;

/**
 * Class SqlserverUser.
 */
class SqlserverUser
{
    public function insert(User $user)
    {
        echo '使用 SQL Server 增加一条用户记录'.PHP_EOL;
    }

    public function getUser(int $id)
    {
        echo '在 SQL Server 查询一条用户记录'.PHP_EOL;

        return 'new user class';
    }
}
