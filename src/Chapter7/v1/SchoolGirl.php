<?php

namespace Rovast\DesignPatternTalk\Chapter7\v1;

/**
 * Class SchoolGirl
 *
 * @package \Rovast\DesignPatternTalk\Chapter7\v1
 */
class SchoolGirl
{
    /**
     * @var  string name
     */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }
}
