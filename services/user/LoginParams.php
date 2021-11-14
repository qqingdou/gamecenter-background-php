<?php
/**
 * Created by PhpStorm.
 * User: tangping
 * Date: 2021/11/13
 * Time: 23:29
 */

namespace gamecenter\services\user;


use gamecenter\base\BaseParams;

class LoginParams extends BaseParams
{
    public $userId          =   0;

    public $bindPhone       =   0;

    public $phone           =   '';

    public $bindEmail       =   0;

    public $email           =   '';

    public $realName        =   0;

    public $age             =   0;

    public $isTempAccount   =   0;
}