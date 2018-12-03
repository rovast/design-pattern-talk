<?php

namespace Rovast\DesignPatternTalk\Chapter15\v4;

/**
 * Class AccessFactory
 *
 * @package \Rovast\DesignPatternTalk\Chapter15\v4
 */
class AccessDepartment implements DepartmentInterface
{
    public function insertDepartment(Department $department)
    {
        echo '使用 Access Server 创建一个部门' . PHP_EOL;
    }

    public function getDepartment($id)
    {
        echo '使用 Access Server 获取一个部门' . PHP_EOL;
    }
}
