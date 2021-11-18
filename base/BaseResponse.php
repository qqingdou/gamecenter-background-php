<?php
/**
 * Created by PhpStorm.
 * User: Alvin Tang
 * Date: 2021/11/18
 * Time: 19:42
 * Email: pingtang000@foxmail.com
 * Desc: xxx
 */

namespace gamecenter\base;


class BaseResponse extends BaseParams
{
	public $code		=	100000;

	public $info		=	null;

	public $lists		=	[];

	public $message		=	'';

	public $requestId	=	'';
}