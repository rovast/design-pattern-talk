<?php

namespace Rovast\DesignPatternTalk\Chapter6\v3;

/**
 * Class Person
 *
 */
class Person
{
    /**
     * @var  string name
     */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function decorate(Finery $finery)
    {
        $finery->show();
    }

    public function show()
    {
        echo "装扮的 {$this->name}";
    }
}
