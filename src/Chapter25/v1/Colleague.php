<?php
/**
 * Created by PhpStorm.
 * User: rovast
 * Date: 2018-12-24
 * Time: 21:52
 */

namespace Rovast\DesignPatternTalk\Chapter25\v1;

abstract class Colleague
{
    /**
     * @var Mediator
     */
    protected $mediator;

    public function __construct(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }
}
