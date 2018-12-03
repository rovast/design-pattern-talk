<?php

namespace Rovast\DesignPatternTalk\Chapter15\v3;

/**
 * interface FactoryInterface
 *
 * @package \Rovast\DesignPatternTalk\Chapter15\v3
 */
interface FactoryInterface
{
    public function createUser();

    public function createDepartment();
}
