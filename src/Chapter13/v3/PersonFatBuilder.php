<?php

namespace Rovast\DesignPatternTalk\Chapter13\v3;

/**
 * 小人构造器，用来生成一个胖小人.
 */
class PersonFatBuilder extends PersonBuilder
{
    public function buildHead()
    {
        $this->pen->draw('画一个胖头');
    }

    public function buildHands()
    {
        $this->pen->draw('画一双胖手');
    }

    public function buildFeet()
    {
        $this->pen->draw('画一双胖脚');
    }

    public function buildLegs()
    {
        $this->pen->draw('画一双胖腿');
    }
}
