<?php

namespace Rovast\DesignPatternTalk\Chapter15\v5;

/**
 * interface DepartmentInterface
 *
 * @package \Rovast\DesignPatternTalk\Chapter15\v5
 */
interface DepartmentInterface
{
    public function insertDepartment(Department $department);

    public function getDepartment($departmentId);
}
