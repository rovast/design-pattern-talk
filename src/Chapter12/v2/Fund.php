<?php

namespace Rovast\DesignPatternTalk\Chapter12\v2;

/**
 * Class Fund.
 */
class Fund
{
    private $stock1;

    private $stock2;

    private $stock3;

    private $na1;

    private $rt1;

    public function __construct()
    {
        $this->stock1 = new Stock1();
        $this->stock2 = new Stock2();
        $this->stock3 = new Stock3();
        $this->na1    = new NationDebt1();
        $this->rt1    = new Realty1();
    }

    public function buy()
    {
        $this->stock1->buy();
        $this->stock2->buy();
        $this->stock3->buy();
        $this->na1->buy();
        $this->rt1->buy();
    }

    public function sell()
    {
        $this->stock1->sell();
        $this->stock2->sell();
        $this->stock3->sell();
        $this->na1->sell();
        $this->rt1->sell();
    }
}
