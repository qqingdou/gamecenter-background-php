<?php
/**
 * Created by PhpStorm.
 * User: Alvin Tang
 * Date: 2021/11/15
 * Time: 20:27
 * Email: pingtang000@foxmail.com
 * Desc: xxx
 */

namespace gamecenter\common\utils;


class CommonUtil
{
	/**
	 * 获取用户IP
	 * @return string
	 */
	public static function getIp(){
		if ($_SERVER["HTTP_X_FORWARDED_FOR"] ?? false) {
			$ip  = $_SERVER["HTTP_X_FORWARDED_FOR"];
			$ips = explode(',', $ip);//阿里cdn
			$ip  = $ips[0];
		} elseif ($_SERVER["HTTP_CDN_SRC_IP"] ?? false) {
			$ip = $_SERVER["HTTP_CDN_SRC_IP"];
		} elseif (getenv('HTTP_CLIENT_IP')) {
			$ip = getenv('HTTP_CLIENT_IP');
		} elseif (getenv('HTTP_X_FORWARDED')) {
			$ip = getenv('HTTP_X_FORWARDED');
		} elseif (getenv('HTTP_FORWARDED_FOR')) {
			$ip = getenv('HTTP_FORWARDED_FOR');
		} elseif (getenv('HTTP_FORWARDED')) {
			$ip = getenv('HTTP_FORWARDED');
		} else {
			$ip = $_SERVER['REMOTE_ADDR']  ?? '';
		}
		$ip = str_replace(array('::ffff:', '[', ']'), array('', '', ''), $ip);

		return $ip;
	}
}