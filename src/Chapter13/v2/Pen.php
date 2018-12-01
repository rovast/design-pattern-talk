<?php

namespace Rovast\DesignPatternTalk\Chapter13\v2;

class Pen
{
    public function draw(string $element)
    {
        echo "draw {$element}" . PHP_EOL;
    }
}
