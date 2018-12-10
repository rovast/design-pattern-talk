<?php

namespace Rovast\DesignPatternTalk\Chapter19\v1;

/**
 * Class Company
 *
 * @package \Rovast\DesignPatternTalk\Chapter19\v1
 */
abstract class Company
{
    protected $name;

    /**
     * @var  array children
     */
    protected $children;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * 显示调试信息
     *
     * @author ROVAST
     */
    public function display()
    {
        foreach ($this->children as $company) {
            echo $company->name . PHP_EOL;
        }
    }

    /**
     * 添加
     *
     * @param \Rovast\DesignPatternTalk\Chapter19\v1\Company $company
     * @return mixed
     * @author ROVAST
     */
    abstract public function add(Company $company);

    /**
     * 删除
     *
     * @param \Rovast\DesignPatternTalk\Chapter19\v1\Company $company
     * @return mixed
     * @author ROVAST
     */
    abstract public function remove(Company $company);

    /**
     * 部门职责
     *
     * @return mixed
     * @author ROVAST
     */
    abstract public function duty();
}
