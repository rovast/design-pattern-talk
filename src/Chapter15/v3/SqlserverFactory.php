<?php

namespace Rovast\DesignPatternTalk\Chapter15\v3;

/**
 * Class SqlserverFactory.
 */
class SqlserverFactory implements FactoryInterface
{
    public function createUser()
    {
        echo '创建一个 sqlserver user 工厂'.PHP_EOL;

        return new SqlserverUser();
    }

    public function createDepartment()
    {
        echo '创建一个 sqlserver department 工厂'.PHP_EOL;

        return new SqlserverDepartment();
    }
}
