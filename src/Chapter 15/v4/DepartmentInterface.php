<?php

namespace Rovast\DesignPatternTalk\Chapter15\v4;

/**
 * interface DepartmentInterface.
 */
interface DepartmentInterface
{
    public function insertDepartment(Department $department);

    public function getDepartment($departmentId);
}
