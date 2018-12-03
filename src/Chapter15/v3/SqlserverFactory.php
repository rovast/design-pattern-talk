<?php

namespace Rovast\DesignPatternTalk\Chapter15\v3;

/**
 * Class SqlserverFactory
 *
 * @package \Rovast\DesignPatternTalk\Chapter15\v3
 */
class SqlserverFactory implements FactoryInterface
{
    public function createUser()
    {
        echo '使用 Sql Server 创建一个用户' . PHP_EOL;
    }

    public function createDepartment()
    {
        echo '使用 Sql Server 创建一个部门' . PHP_EOL;
    }
}
