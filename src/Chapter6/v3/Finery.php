<?php

namespace Rovast\DesignPatternTalk\Chapter6\v3;

/**
 * Class Finery.
 */
abstract class Finery
{
    /**
     * @var \Rovast\DesignPatternTalk\Chapter6\v3\Person component
     */
    protected $component;

    public function show()
    {
        if (null !== $this->component) {
            $this->component->show();
        }
    }
}
