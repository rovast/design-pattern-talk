<?php

namespace Rovast\DesignPatternTalk\Chapter15\v3;

/**
 * interface UserInterface.
 */
interface UserInterface
{
    public function insertUser(User $user);

    public function getUser($userId);
}
