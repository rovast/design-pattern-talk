<?php

namespace Rovast\DesignPatternTalk\Chapter15\v3;

/**
 * interface DepartmentInterface
 *
 * @package \Rovast\DesignPatternTalk\Chapter15\v3
 */
interface DepartmentInterface
{
    public function insertDepartment(Department $department);

    public function getDepartment(int $departmentId);
}
