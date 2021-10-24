<?php
/**
 * Created by PhpStorm.
 * User: tangping
 * Date: 2021/10/24
 * Time: 23:09
 */

namespace gamecenter\api\base;


class GlobalParams extends BaseParams
{
    public $time;
    public $nonce;
    public $sign;
    public $encryptData;
    public $requestId;

    /**
     * @return mixed
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param mixed $requestId
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
    }
    /**
     * @return mixed
     */
    public function getEncryptData()
    {
        return $this->encryptData;
    }

    /**
     * @param mixed $encryptData
     */
    public function setEncryptData($encryptData)
    {
        $this->encryptData = $encryptData;
    }
    /**
     * @return mixed
     */
    public function getSign()
    {
        return $this->sign;
    }

    /**
     * @param mixed $sign
     */
    public function setSign($sign)
    {
        $this->sign = $sign;
    }
    /**
     * @return mixed
     */
    public function getNonce()
    {
        return $this->nonce;
    }

    /**
     * @param mixed $nonce
     */
    public function setNonce($nonce)
    {
        $this->nonce = $nonce;
    }
    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }
}