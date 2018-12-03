<?php

namespace Rovast\DesignPatternTalk\Chapter15\v3;

/**
 * interface UserInterface
 *
 * @package \Rovast\DesignPatternTalk\Chapter15\v3
 */
interface UserInterface
{
    public function insertUser(User $user);

    public function getUser($userId);
}
