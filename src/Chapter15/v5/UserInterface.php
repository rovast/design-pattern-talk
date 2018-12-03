<?php

namespace Rovast\DesignPatternTalk\Chapter15\v5;

/**
 * interface UserInterface
 *
 * @package \Rovast\DesignPatternTalk\Chapter15\v5
 */
interface UserInterface
{
    public function insertUser(User $user);

    public function getUser($userId);
}
