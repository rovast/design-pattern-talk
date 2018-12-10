<?php

namespace Rovast\DesignPatternTalk\Chapter19\v1;

/**
 * Class HRDepartment
 *
 * @package \Rovast\DesignPatternTalk\Chapter19\v1
 */
class HRDepartment extends Company
{
    public function add(Company $company)
    {
    }

    public function remove(Company $company)
    {
    }

    public function duty()
    {
        echo '员工招聘，培训' . PHP_EOL;
    }
}
