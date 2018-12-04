<?php

namespace Rovast\DesignPatternTalk\Chapter7\v3;

/**
 * Class Pursuit.
 */
class Pursuit implements GiveGift
{
    /**
     * @var \Rovast\DesignPatternTalk\Chapter7\v3\SchoolGirl schoolGirl
     */
    private $schoolGirl;

    public function __construct(SchoolGirl $schoolGirl)
    {
        $this->schoolGirl = $schoolGirl;
    }

    public function giveDolls()
    {
        echo $this->schoolGirl->name().' 送你洋娃娃'.PHP_EOL;
    }

    public function giveFlowers()
    {
        echo $this->schoolGirl->name().' 送你鲜花'.PHP_EOL;
    }

    public function giveChocolate()
    {
        echo $this->schoolGirl->name().' 送你巧克力'.PHP_EOL;
    }
}
