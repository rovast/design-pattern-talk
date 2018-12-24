<?php
/**
 * Created by PhpStorm.
 * User: rovast
 * Date: 2018-12-24
 * Time: 21:54
 */

namespace Rovast\DesignPatternTalk\Chapter25\v1;

class ConcreteMediator extends Mediator
{
    /**
     * @var ConcreteColleague1
     */
    private $concreteColleague1;

    /**
     * @return ConcreteColleague1
     */
    public function getConcreteColleague1(): ConcreteColleague1
    {
        return $this->concreteColleague1;
    }

    /**
     * @param ConcreteColleague1 $concreteColleague1
     * @return ConcreteMediator
     */
    public function setConcreteColleague1(ConcreteColleague1 $concreteColleague1): ConcreteMediator
    {
        $this->concreteColleague1 = $concreteColleague1;
        return $this;
    }

    /**
     * @var ConcreteColleague2
     */
    private $concreteColleague2;

    /**
     * @return ConcreteColleague2
     */
    public function getConcreteColleague2(): ConcreteColleague2
    {
        return $this->concreteColleague2;
    }

    /**
     * @param ConcreteColleague2 $concreteColleague2
     * @return ConcreteMediator
     */
    public function setConcreteColleague2(ConcreteColleague2 $concreteColleague2): ConcreteMediator
    {
        $this->concreteColleague2 = $concreteColleague2;
        return $this;
    }

    public function send(string $message, Colleague $colleague)
    {
        if ($colleague === $this->concreteColleague1) {
            $this->concreteColleague2->notify($message);
        } else {
            $this->concreteColleague1->notify($message);
        }
    }
}
