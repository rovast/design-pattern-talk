<?php
/**
 * Created by PhpStorm.
 * User: rovast
 * Date: 2018-12-23
 * Time: 20:42.
 */

namespace Rovast\DesignPatternTalk\Chapter24\v2;

class CommonManager extends Manager
{
    public function requestApplication(Request $request)
    {
        if ('请假' === $request->getRequestType() && $request->getNumber() <= 2) {
            echo sprintf(
                '%s : %s 数量 %s 被批准'.PHP_EOL,
                $this->name,
                $request->getRequestContent(),
                $request->getNumber()
            );
        } elseif (null != $this->superior) {
            $this->superior->requestApplication($request);
        }
    }
}
