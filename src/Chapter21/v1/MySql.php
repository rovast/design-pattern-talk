<?php

namespace Rovast\DesignPatternTalk\Chapter21\v1;

/**
 * Class MySql
 *
 * @package \Rovast\DesignPatternTalk\Chapter21\v1
 */
class MySql
{
    protected static $instance;

    private function __construct()
    {
        $this->connect();
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    public function connect()
    {
        echo "初始化数据库，进行数据库连接等操作" . PHP_EOL;
    }

    public function query($condition)
    {
        return "进行数据库查询，返回结果。condition=" . $condition;
    }

    public function __destruct()
    {
        echo "关闭数据库连接" . PHP_EOL;
    }
}
