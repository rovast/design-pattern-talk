<?php

namespace Rovast\DesignPatternTalk\Chapter22\v4;

/**
 * Class HandsetBrand
 *
 * @package \Rovast\DesignPatternTalk\Chapter22\v4
 */
abstract class HandsetBrand
{
    /**
     * @var  \Rovast\DesignPatternTalk\Chapter22\v4\HandsetSoft soft
     */
    protected $soft;

    public function setHandsetSoft(HandsetSoft $soft)
    {
        $this->soft = $soft;
    }

    abstract public function run();
}
