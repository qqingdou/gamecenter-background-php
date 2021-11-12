<?php
/**
 * Created by PhpStorm.
 * User: Alvin Tang
 * Date: 2021/11/12
 * Time: 17:50
 * Email: pingtang000@foxmail.com
 * Desc: xxx
 */

namespace gamecenter\base;


interface ParamsInterface
{
	public static function getSingleton(...$args);

	public static function toArray(): array;
}