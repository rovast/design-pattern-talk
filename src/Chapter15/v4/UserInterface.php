<?php

namespace Rovast\DesignPatternTalk\Chapter15\v4;

/**
 * interface UserInterface.
 */
interface UserInterface
{
    public function insertUser(User $user);

    public function getUser($userId);
}
