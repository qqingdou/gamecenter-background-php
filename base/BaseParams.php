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


use yii\base\Component;

abstract class BaseParams extends Component implements ParamsInterface
{
	private static $instance    =   null;

	public static function getSingleton(...$args)
	{
		if(self::$instance === null){
			self::$instance =   new static($args);
		}
		return  self::$instance;
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