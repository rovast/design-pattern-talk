<?php

namespace Rovast\DesignPatternTalk\Chapter15\v5;

/**
 * Class SqlserverDepartment
 *
 * @package \Rovast\DesignPatternTalk\Chapter15\v5
 */
class SqlserverDepartment implements DepartmentInterface
{
    public function insertDepartment(Department $department)
    {
        echo 'sql server 插入一个部门' . PHP_EOL;
    }

    public function getDepartment($id)
    {
        echo 'sql server 查询一个部门'  . PHP_EOL;
    }
}
