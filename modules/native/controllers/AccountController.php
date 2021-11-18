<?php
/**
 * Created by PhpStorm.
 * User: tangping
 * Date: 2021/11/14
 * Time: 15:48
 */

namespace gamecenter\modules\native\controllers;


use gamecenter\base\BaseWebController;
use gamecenter\common\models\LoginModel;

class AccountController extends BaseWebController
{
    public function actionLogin(){
		(new LoginModel())->accountLogin();
    }
}