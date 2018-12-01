<?php

namespace Rovast\DesignPatternTalk\Chapter13\v3;

abstract class PersonBuilder
{
    protected $pen;

    public function __construct(Pen $pen)
    {
        $this->pen = $pen;
    }

    abstract public function buildHead();
    abstract public function buildHands();
    abstract public function buildLegs();
    abstract public function buildFeet();
}
