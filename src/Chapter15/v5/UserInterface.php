<?php

namespace Rovast\DesignPatternTalk\Chapter15\v5;

/**
 * interface UserInterface.
 */
interface UserInterface
{
    public function insertUser(User $user);

    public function getUser($userId);
}
