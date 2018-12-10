<?php

namespace Rovast\DesignPatternTalk\Chapter19\v1;

/**
 * Class FinanceDepartment.
 */
class FinanceDepartment extends Company
{
    public function add(Company $company)
    {
    }

    public function remove(Company $company)
    {
    }

    public function duty()
    {
        echo '公司财务报销等'.PHP_EOL;
    }
}
