<?php
/**
 * Created by PhpStorm.
 * User: Alvin Tang
 * Date: 2021/11/12
 * Time: 19:11
 * Email: pingtang000@foxmail.com
 * Desc: xxx
 */

namespace gamecenter\base;


use yii\web\Controller;

class BaseWebController extends Controller
{
	/**
	 * 安全校验
	 */
	protected function security(){
		$this->checkIp();
		$this->checkDevice();
		$this->checkUser();
		$this->checkExt();
	}

	/**
	 * 校验IP
	 */
	protected function checkIp(){

	}

	/**
	 * 校验设备
	 */
	protected function checkDevice(){

	}

	/**
	 * 校验用户
	 */
	protected function checkUser(){

	}

	protected function checkExt(){

	}

	public function beforeAction($action)
	{
		CryptParams::getSingleton(\Yii::$app->request->post());

		$this->security();

		return parent::beforeAction($action);
	}

	public function afterAction($action, $result)
	{
		return parent::afterAction($action, $result);
	}
}