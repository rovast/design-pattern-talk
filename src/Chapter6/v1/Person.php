<?php

namespace Rovast\DesignPatternTalk\Chapter6\v1;

/**
 * Class Person
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

    public function wearTShirts()
    {
        echo '大 T 恤 ';
    }

    public function wearBigTrouser()
    {
        echo '大裤衩 ';
    }

    public function wearSneakers()
    {
        echo '破球鞋 ';
    }

    public function wearTie()
    {
        echo '领带 ';
    }

    public function wearLeatherShoes()
    {
        echo '大头皮鞋 ';
    }

    public function show()
    {
        print("装扮的 {$this->name}");
    }
}
