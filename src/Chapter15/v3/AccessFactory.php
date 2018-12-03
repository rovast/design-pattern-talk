<?php

namespace Rovast\DesignPatternTalk\Chapter15\v3;

/**
 * Class AccessFactory
 *
 * @package \Rovast\DesignPatternTalk\Chapter15\v3
 */
class AccessFactory implements FactoryInterface
{
    public function createUser()
    {
        echo '使用 Sql Server 创建一个用户' . PHP_EOL;
        return new AccessUser();
    }

    public function createDepartment()
    {
        echo '使用 Sql Server 创建一个部门' . PHP_EOL;
        return new AccessDepartment();
    }
}
