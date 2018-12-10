<?php

namespace Rovast\DesignPatternTalk\Chapter19\v1;

/**
 * Class ConcreteCompany
 *
 * @package \Rovast\DesignPatternTalk\Chapter19\v1
 */
class ConcreteCompany extends Company
{
    public function add(Company $company)
    {
        $this->children[$company->name] = $company;
    }

    public function remove(Company $company)
    {
        unset($this->children[$company->name]);
    }

    public function duty()
    {
        /**
         * @var \Rovast\DesignPatternTalk\Chapter19\v1\Company $company
         */
        foreach ($this->children as $company) {
            echo $company->duty() . PHP_EOL;
        }
    }
}
