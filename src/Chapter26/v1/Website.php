<?php
/**
 * Created by PhpStorm.
 * User: rovast
 * Date: 2018-12-25
 * Time: 20:37.
 */

namespace Rovast\DesignPatternTalk\Chapter26\v1;

class Website
{
    /**
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function use()
    {
        echo '网站分类：'.$this->name.PHP_EOL;
    }
}
