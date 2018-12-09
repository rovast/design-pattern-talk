<?php

namespace Rovast\DesignPatternTalk\Chapter15\v4;

/**
 * Class DataAccess.
 */
class DataAccess
{
    /**
     * 数据库驱动名称 sqlServer accessServer.
     *
     * @var string dbDriver
     */
    protected $dbDriver = 'accessServer';

    /**
     * @return \Rovast\DesignPatternTalk\Chapter15\v4\AccessUser|\Rovast\DesignPatternTalk\Chapter15\v4\SqlserverUser
     *
     * @author ROVAST
     */
    public function createUser()
    {
        switch ($this->dbDriver) {
            case 'sqlServer':
                return new SqlserverUser();

                break;
            case 'accessServer':
                return new AccessUser();

                break;
            default:
        }
    }

    /**
     * @return \Rovast\DesignPatternTalk\Chapter15\v4\AccessDepartment|\Rovast\DesignPatternTalk\Chapter15\v4\SqlserverDepartment
     *
     * @author ROVAST
     */
    public function createDepartment()
    {
        switch ($this->dbDriver) {
            case 'sqlServer':
                return new SqlserverDepartment();

                break;
            case 'accessServer':
                return new AccessDepartment();

                break;
            default:
        }
    }
}
