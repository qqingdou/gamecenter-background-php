<?php
/**
 * Created by PhpStorm.
 * User: Alvin Tang
 * Date: 2021/11/12
 * Time: 17:46
 * Email: pingtang000@foxmail.com
 * Desc: xxx
 */

namespace gamecenter\base;

abstract class BaseParams extends BaseComponent implements ParamsInterface
{
	private static $instance    =   null;

	public $data				=	null;

	public static function getSingleton(...$args)
	{
		if(self::$instance === null){
			self::$instance =   new static($args);
		}
		return  self::$instance;
	}

	/**
	 * @return null
	 */
	public function getData()
	{
		if(!$this->data){
			$this->data	=	array_merge(\Yii::$app->request->post(), \Yii::$app->request->get());
		}
		return	$this->data;
	}

	public function toArray(): array
    {
        $reflectClass   =   new \ReflectionClass($this);
        $props          =   $reflectClass->getProperties(\ReflectionProperty::IS_PUBLIC);

        $myArray        =   [];
        if($props){
            foreach ($props as $prop){
                $myArray[ $prop->getName() ]    = $prop->getValue();
            }
        }
        return  $myArray;
    }
}