<?php
/**
 * Created by PhpStorm.
 * User: tangping
 * Date: 2021/10/24
 * Time: 23:14
 */

namespace gamecenter\api\base\traits;


trait SingletonTrait
{
    private static $instance    =   null;

    public static function getSingleton(...$args){
        if(self::$instance === null){
            self::$instance =   new static($args);
        }
        return  self::$instance;
    }
}