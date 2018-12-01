<?php

namespace Rovast\DesignPatternTalk\Chapter13\v3;

/**
 * 小人构造器，用来生成一个瘦小小人
 */
class PersonThinBuilder extends PersonBuilder
{
    public function buildHead()
    {
        $this->pen->draw('画一个瘦头');
    }

    public function buildHands()
    {
        $this->pen->draw('画一双瘦手');
    }

    public function buildFeet()
    {
        $this->pen->draw('画一双瘦脚');
    }

    public function buildLegs()
    {
        $this->pen->draw('画一双瘦腿');
    }
}
