<?php

namespace Rovast\DesignPatternTalk\Chapter15\v5;

/**
 * Class DataAccess.
 */
class DataAccess
{
    /**
     * 数据库驱动名称 Sqlserver Access.
     *
     * @var string dbDriver
     */
    protected $dbDriver = 'Access';

    /**
     * @return \Rovast\DesignPatternTalk\Chapter15\v5\AccessUser|\Rovast\DesignPatternTalk\Chapter15\v5\SqlserverUser
     *
     * @author ROVAST
     */
    public function createUser()
    {
        $className = 'Rovast\\DesignPatternTalk\\Chapter15\v5\\'.ucfirst($this->dbDriver).'User';

        return new $className();
    }

    /**
     * @return \Rovast\DesignPatternTalk\Chapter15\v5\AccessDepartment|\Rovast\DesignPatternTalk\Chapter15\v5\SqlserverDepartment
     *
     * @author ROVAST
     */
    public function createDepartment()
    {
        $className = 'Rovast\\DesignPatternTalk\\Chapter15\v5\\'.ucfirst($this->dbDriver).'Department';

        return new $className();
    }
}
