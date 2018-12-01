<?php

namespace Rovast\DesignPatternTalk\Chapter13\v3;

/**
 * 建造者指挥者，用来确定构建流程
 *
 * @desc
 * @author rovast <rovast@163.com>
 * @date
 */
class PersonDirector
{
    private $builder;

    /**
     * PersonDirector constructor.
     * 根据不同的构造者来构建不同的人，但是每次构建的流程是一致的
     *
     * @param \Rovast\DesignPatternTalk\Chapter13\v3\PersonBuilder $personBuilder
     */
    public function __construct(PersonBuilder $personBuilder)
    {
        $this->builder = $personBuilder;
    }

    public function build()
    {
        $this->builder->buildHead();
        $this->builder->buildHands();
        $this->builder->buildLegs();
        $this->builder->buildFeet();
    }
}
