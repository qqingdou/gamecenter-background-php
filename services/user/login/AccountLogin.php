<?php
/**
 * Created by PhpStorm.
 * User: tangping
 * Date: 2021/11/13
 * Time: 23:37
 */

namespace gamecenter\services\user\login;

use gamecenter\base\GlobalParams;
use gamecenter\services\user\LoginParams;
use gamecenter\services\user\LoginService;

class AccountLogin extends LoginService
{
    public $account     =   '';
    public $password    =   '';

    protected function dealLogin(): LoginParams{

    	$myGlobalParams	=	GlobalParams::getSingleton();

        $data           =   null;//todo 数据库验证 or

        $loginParams    =   new LoginParams($data);

        return  $loginParams;
    }
}