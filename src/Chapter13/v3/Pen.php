<?php

namespace Rovast\DesignPatternTalk\Chapter13\v3;

class Pen
{
    public function draw(string $element)
    {
        echo "draw {$element}" . PHP_EOL;
    }
}
