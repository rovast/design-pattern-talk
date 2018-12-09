<?php

namespace Rovast\DesignPatternTalk\Chapter17\v2;

/**
 * Class Translator
 *
 * @package \Rovast\DesignPatternTalk\Chapter17\v2
 */
class Translator extends Player
{
    protected $name;

    /**
     * @var  \Rovast\DesignPatternTalk\Chapter17\v2\ForeignCenter foreignCenter
     */
    protected $foreignCenter;

    public function __construct($name)
    {
        $this->name          = $name;
        $this->foreignCenter = new ForeignCenter($name);
    }

    public function attack()
    {
        $this->foreignCenter->jingong();
    }

    public function defense()
    {
        $this->foreignCenter->fangshou();
    }
}
