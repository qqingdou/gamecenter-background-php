<?php
/**
 * Created by PhpStorm.
 * User: Alvin Tang
 * Date: 2021/11/18
 * Time: 19:17
 * Email: pingtang000@foxmail.com
 * Desc: xxx
 */

namespace gamecenter\base;


use yii\base\Component;

class BaseComponent extends Component
{
	public function __set($name, $value)
	{
		try{
			parent::__set($name, $value);
			return	$this;
		}catch (\Exception $exception){

		}

	}

	public function __get($name)
	{
		try{
			$result	= parent::__get($name);
			return	$result;
		}catch (\Exception $exception){
			if(isset($this->$name)){
				return	$this->$name;
			}else{
				throw $exception;
			}
		}
	}
}