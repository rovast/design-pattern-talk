<?php
/**
 * Created by PhpStorm.
 * User: rovast
 * Date: 2018-12-23
 * Time: 20:08
 */

namespace Rovast\DesignPatternTalk\Chapter24\v1;

class Request
{
    private $requestType;

    /**
     * @return mixed
     */
    public function getRequestType()
    {
        return $this->requestType;
    }

    /**
     * @param mixed $requestType
     * @return Request
     */
    public function setRequestType($requestType)
    {
        $this->requestType = $requestType;
        return $this;
    }

    private $requestContent;

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     * @return Request
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    private $number;

    /**
     * @return mixed
     */
    public function getRequestContent()
    {
        return $this->requestContent;
    }

    /**
     * @param mixed $requestContent
     * @return Request
     */
    public function setRequestContent($requestContent)
    {
        $this->requestContent = $requestContent;
        return $this;
    }
}
