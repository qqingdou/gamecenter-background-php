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
	public function security(){

	}

	public function beforeAction($action)
	{
		$this->security();
		return parent::beforeAction($action);
	}
}