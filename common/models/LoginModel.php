<?php
/**
 * Created by PhpStorm.
 * User: tangping
 * Date: 2021/11/14
 * Time: 15:52
 */

namespace gamecenter\common\models;


use gamecenter\base\BaseModel;
use gamecenter\base\BaseResponse;
use gamecenter\base\GlobalParams;
use gamecenter\common\helpers\ValidateHelper;
use gamecenter\services\user\login\AccountLogin;

class LoginModel extends BaseModel
{
	/**
	 * 验证规则
	 * @return array
	 */
	protected function validateRules(){
    	$rules	=	[
			[['account', 'password'], 'required', 'message' => '必填参数不能为空'],
			['account', 'validateAccount', ],
			['password', 'validatePassword', ],
		];
		$result	=	ValidateHelper::validateRules(GlobalParams::getSingleton()->getData(), $rules, $message = '');
		return	[$result, $message];
	}

	public function accountLogin(){

		list($validateResult, $message)	=	$this->validateRules();

		if(!$validateResult){
			return	BaseResponse::getSingleton()->message = $message;
		}

		$myService	=	new AccountLogin();
		return	$myService->login();
	}
}