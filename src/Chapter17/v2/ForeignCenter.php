<?php

namespace Rovast\DesignPatternTalk\Chapter17\v2;

/**
 * Class ForeignCenter
 *
 * @package \Rovast\DesignPatternTalk\Chapter17\v2
 */
class ForeignCenter
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function jingong()
    {
        echo $this->name . '一夫当关，万夫莫开' . PHP_EOL;
    }

    public function fangshou()
    {
        echo $this->name . '固若金汤，无人能破' . PHP_EOL;
    }
}
