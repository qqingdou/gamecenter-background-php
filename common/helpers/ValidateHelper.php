<?php
/**
 * Created by PhpStorm.
 * User: Alvin Tang
 * Date: 2021/11/18
 * Time: 17:49
 * Email: pingtang000@foxmail.com
 * Desc: xxx
 */

namespace gamecenter\common\helpers;


use yii\base\DynamicModel;

class ValidateHelper
{
	/**
	 * 用户名格式
	 * @param $str
	 * @return int
	 */
	public static function account($str){
		return preg_match('/[^0-9][0-9a-z]?{1,30}/', $str);
	}

	/**
	 * 密码格式
	 * @param $str
	 * @return int
	 */
	public static function password($str){
		return preg_match('/*{6,30}/', $str);
	}

	/**
	 * Yii 验证规则
	 * @param $data
	 * @param $rules
	 * @param string $message
	 * @return bool
	 */
	public static function validateRules($data, $rules, &$message = ''){
		$myModel	=	DynamicModel::validateData($data, $rules);
		if($myModel->hasErrors()){
			$message	=	current($myModel->getFirstErrors()[0]);
			return false;
		}
		return true;
	}
}