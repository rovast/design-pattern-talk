<?php
/**
 * Created by PhpStorm.
 * User: rovast
 * Date: 2018-12-23
 * Time: 20:12
 */

namespace Rovast\DesignPatternTalk\Chapter24\v1;

class Manager
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Manager
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getResult(string $managerLevel, Request $request)
    {
        if ('经理' === $managerLevel) {
            if ('请假' === $request->getRequestType() && $request->getNumber() <= 2) {
                echo sprintf(
                    '%s : %s 数量 %s 被批准' . PHP_EOL,
                    $this->name,
                    $request->getRequestContent(),
                    $request->getNumber()
                );
            } else {
                echo sprintf(
                    '%s : %s 数量 %s 我无权处理' . PHP_EOL,
                    $this->name,
                    $request->getRequestContent(),
                    $request->getNumber()
                );
            }
        } elseif ('总监' === $managerLevel) {
            if ('请假' === $request->getRequestType() && $request->getNumber() <= 5) {
                echo sprintf(
                    '%s : %s 数量 %s 被批准' . PHP_EOL,
                    $this->name,
                    $request->getRequestContent(),
                    $request->getNumber()
                );
            } else {
                echo sprintf(
                    '%s : %s 数量 %s 我无权处理' . PHP_EOL,
                    $this->name,
                    $request->getRequestContent(),
                    $request->getNumber()
                );
            }
        } elseif ('总经理' === $managerLevel) {
            if ('请假' === $request->getRequestType()) {
                echo sprintf(
                    '%s : %s 数量 %s 被批准' . PHP_EOL,
                    $this->name,
                    $request->getRequestContent(),
                    $request->getNumber()
                );
            } elseif ('加薪' === $request->getRequestType() && $request->getNumber() <= 500) {
                echo sprintf(
                    '%s : %s 数量 %s 被批准' . PHP_EOL,
                    $this->name,
                    $request->getRequestContent(),
                    $request->getNumber()
                );
            } elseif ('加薪' === $request->getRequestType() && $request->getNumber() > 500) {
                echo sprintf(
                    '%s : %s 数量 %s 再说吧' . PHP_EOL,
                    $this->name,
                    $request->getRequestContent(),
                    $request->getNumber()
                );
            }
        }
    }
}
