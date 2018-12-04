<?php

namespace Rovast\DesignPatternTalk\Chapter13\v2;

/**
 * 小人构造器，用来生成一个瘦小小人.
 */
class PersonThinBuilder
{
    private $pen;

    public function __construct(Pen $pen)
    {
        $this->pen = $pen;
    }

    /**
     * 建造一个小人.
     */
    public function build()
    {
        echo '画一个瘦子'.PHP_EOL;
        $this->pen->draw('head');
        $this->pen->draw('hands');
        $this->pen->draw('legs');
        $this->pen->draw('feet');
    }
}
