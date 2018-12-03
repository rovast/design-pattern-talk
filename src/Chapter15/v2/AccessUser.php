<?php

namespace Rovast\DesignPatternTalk\Chapter15\v2;

/**
 * Class AccessUser
 *
 * @package \Rovast\DesignPatternTalk\Chapter15\v2
 */
class AccessUser implements UserInterface
{
    public function insert(User $user)
    {
        echo '使用 Access 增加一条用户记录' . PHP_EOL;
    }

    public function get(int $id)
    {
        echo '在 Access 查询一条用户记录' . PHP_EOL;

        return 'new user class';
    }
}
