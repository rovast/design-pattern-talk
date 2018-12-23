<?php
/**
 * Created by PhpStorm.
 * User: rovast
 * Date: 2018-12-23
 * Time: 20:42.
 */

namespace Rovast\DesignPatternTalk\Chapter24\v2;

class GeneralManager extends Manager
{
    public function requestApplication(Request $request)
    {
        if ('请假' === $request->getRequestType()) {
            echo sprintf(
                '%s : %s 数量 %s 被批准'.PHP_EOL,
                $this->name,
                $request->getRequestContent(),
                $request->getNumber()
            );
        } elseif ('加薪' === $request->getRequestType() && $request->getNumber() <= 500) {
            echo sprintf(
                '%s : %s 数量 %s 被批准'.PHP_EOL,
                $this->name,
                $request->getRequestContent(),
                $request->getNumber()
            );
        } elseif ('加薪' === $request->getRequestType() && $request->getNumber() > 500) {
            echo sprintf(
                '%s : %s 数量 %s 再说吧'.PHP_EOL,
                $this->name,
                $request->getRequestContent(),
                $request->getNumber()
            );
        }
    }
}
