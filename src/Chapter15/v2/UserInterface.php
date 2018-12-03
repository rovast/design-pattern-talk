<?php

namespace Rovast\DesignPatternTalk\Chapter15\v2;

/**
 * Class UserInterface.
 */
interface UserInterface
{
    /**
     * 插入一条记录.
     *
     * @param \Rovast\DesignPatternTalk\Chapter15\v2\User $user
     *
     * @return mixed
     *
     * @author ROVAST
     */
    public function insert(User $user);

    /**
     * 获取一条用户信息.
     *
     * @param int $id
     *
     * @return mixed
     *
     * @author ROVAST
     */
    public function get(int $id);
}
