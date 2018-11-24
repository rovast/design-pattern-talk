<?php

namespace Rovast\DesignPatternTalk\Chapter9\v1;

/**
 * Class Resume
 *
 * @package \Rovast\DesignPatternTalk\Chapter9\v1
 */
class Resume
{
    /**
     * @var  string name
     */
    private $name;

    /**
     * @var  integer age
     */
    private $age;

    /**
     * @var  string sex
     */
    private $sex;

    /**
     * @var  string company
     */
    private $company;

    /**
     * @var  string timeArea
     */
    private $timeArea;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setPersonalInfo(string $sex, int $age)
    {
        $this->age = $age;
        $this->sex = $sex;
    }

    public function setWorkExperience(string $timeArea, string $company)
    {
        $this->timeArea = $timeArea;
        $this->company  = $company;
    }

    public function display()
    {
        echo "姓名：{$this->name}" . PHP_EOL
            . "年龄：{$this->age}" . PHP_EOL
            . "工作经历：{$this->timeArea} {$this->company}" . PHP_EOL;
    }
}
