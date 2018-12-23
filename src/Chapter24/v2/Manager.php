<?php
/**
 * Created by PhpStorm.
 * User: rovast
 * Date: 2018-12-23
 * Time: 20:39
 */

namespace Rovast\DesignPatternTalk\Chapter24\v2;

abstract class Manager
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var Manager
     */
    protected $superior;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * 设置上级
     * @param Manager $manager
     */
    public function setSupervisor(Manager $manager)
    {
        $this->superior = $manager;
    }

    abstract public function requestApplication(Request $request);
}
