<?php
/**
 * Created by PhpStorm.
 * User: tangping
 * Date: 2021/11/13
 * Time: 23:37
 */

namespace gamecenter\services\user\login;

use gamecenter\services\user\LoginParams;
use gamecenter\services\user\LoginService;

class AccountLogin extends LoginService
{
    public $account     =   '';
    public $password    =   '';

    protected function dealLogin(): LoginParams{

        $data           =   null;//todo 数据库验证 or

        $loginParams    =   new LoginParams($data);

        return  $loginParams;
    }
}