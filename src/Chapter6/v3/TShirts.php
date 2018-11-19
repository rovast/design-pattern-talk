<?php

namespace Rovast\DesignPatternTalk\Chapter6\v3;

/**
 * Class TShirts
 */
class TShirts extends Finery
{
    public function show()
    {
        echo 'T恤 ';
        parent::show();
    }
}
