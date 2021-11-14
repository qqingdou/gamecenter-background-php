<?php
/**
 * Created by PhpStorm.
 * User: tangping
 * Date: 2021/11/13
 * Time: 23:17
 */

namespace gamecenter\services\user;


use gamecenter\base\BaseService;

abstract class LoginService extends BaseService
{
    protected function beforeLogin()
    {

    }

    public function login(): LoginParams{
        $this->beforeLogin();
        $loginParams    =   $this->dealLogin();
        $this->afterLogin($loginParams);
        return $loginParams;
    }

    abstract protected function dealLogin(): LoginParams;

    protected function afterLogin(LoginParams $loginParams)
    {
        //todo 返回登录后JWT数据
    }
}