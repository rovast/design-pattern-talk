<?php

namespace Rovast\DesignPatternTalk\Chapter7\v3;

/**
 * Class SchoolGirl.
 */
class SchoolGirl
{
    /**
     * @var string name
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
