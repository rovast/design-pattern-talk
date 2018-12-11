<?php

namespace Rovast\DesignPatternTalk\Chapter20\v1;

/**
 * Class ConcreteIterator
 *
 * @package \Rovast\DesignPatternTalk\Chapter20\v1
 */
class ConcreteIterator extends Iterator
{
    /**
     * @var  array items
     */
    protected $items;

    protected $position = 0;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function first()
    {
        return $this->items[0];
    }

    public function next()
    {
        if (!$this->isDone()) {
            $this->position++;
        }

        return $this->currentItem();
    }

    /**
     * @return bool
     * @author ROVAST
     */
    public function isDone()
    {
        return $this->position > sizeof($this->items);
    }

    public function currentItem()
    {
        return $this->items[$this->position];
    }
}
