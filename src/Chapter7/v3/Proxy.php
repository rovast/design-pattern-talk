<?php

namespace Rovast\DesignPatternTalk\Chapter7\v3;

/**
 * Class Proxy.
 */
class Proxy implements GiveGift
{
    /**
     * @var \Rovast\DesignPatternTalk\Chapter7\v3\Pursuit pursuit
     */
    private $pursuit;

    public function __construct(SchoolGirl $schoolGirl)
    {
        $this->pursuit = new Pursuit($schoolGirl);
    }

    public function giveDolls()
    {
        $this->pursuit->giveDolls();
    }

    public function giveFlowers()
    {
        $this->pursuit->giveFlowers();
    }

    public function giveChocolate()
    {
        $this->pursuit->giveChocolate();
    }
}
