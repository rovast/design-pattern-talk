<?php

namespace Rovast\DesignPatternTalk\Chapter18\v1;

/**
 * Class GameRole.
 */
class GameRole
{
    /**
     * 生命值
     *
     * @var life
     */
    public $life;

    public function setLife($life)
    {
        $this->life = $life;
    }

    public function getLife()
    {
        return $this->life;
    }

    /**
     * 防御值
     *
     * @var defense
     */
    public $defense;

    public function setDefense($defense)
    {
        $this->defense = $defense;
    }

    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * 攻击力.
     *
     * @var attack
     */
    public $attack;

    public function setAttack($attack)
    {
        $this->attack = $attack;
    }

    public function getAttack()
    {
        return $this->attack;
    }

    public function displayState()
    {
        echo "角色当前状态：\n".
            "生命值： {$this->life} \n".
            "攻击力： {$this->attack} \n".
            "防御值： {$this->defense}".PHP_EOL;
    }

    public function getInitState()
    {
        $this->life    = 100;
        $this->attack  = 100;
        $this->defense = 100;
    }

    public function fight()
    {
        $this->life    = 0;
        $this->attack  = 0;
        $this->defense = 0;
    }
}
