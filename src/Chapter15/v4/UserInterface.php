<?php

namespace Rovast\DesignPatternTalk\Chapter15\v4;

/**
 * interface UserInterface
 *
 * @package \Rovast\DesignPatternTalk\Chapter15\v4
 */
interface UserInterface
{
    public function insertUser(User $user);

    public function getUser($userId);
}
