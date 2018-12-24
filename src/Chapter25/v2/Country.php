<?php
/**
 * Created by PhpStorm.
 * User: rovast
 * Date: 2018-12-24
 * Time: 22:16
 */

namespace Rovast\DesignPatternTalk\Chapter25\v2;

abstract class Country
{
    /**
     * @var UnitedNations
     */
    protected $mediator;

    public function __construct(UnitedNations $mediator)
    {
        $this->mediator = $mediator;
    }
}
