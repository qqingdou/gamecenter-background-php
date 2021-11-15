<?php
/**
 * Created by PhpStorm.
 * User: Alvin Tang
 * Date: 2021/11/15
 * Time: 19:51
 * Email: pingtang000@foxmail.com
 * Desc: xxx
 */

namespace gamecenter\common\security;


class AesCrypt
{
	public $aesKey	=	'';

	public $mode	=	'aes-128-ecb';

	public $options	=	OPENSSL_RAW_DATA;

	public $iv		=	'';

	/**
	 * 加密
	 * @param $data
	 * @return string
	 */
	public function encrypt($data){
		return	openssl_encrypt($data, $this->mode, $this->aesKey, $this->options, $this->iv);
	}

	/**
	 * 解密
	 * @param $data
	 * @return string
	 */
	public function decrypt($data){
		return openssl_decrypt($data, $this->mode, $this->aesKey, $this->options, $this->iv);
	}

	/**
	 * 加密后 BASE64加密
	 * @param $data
	 * @return string
	 */
	public  function encryptBase64($data) {
		return base64_encode($this->encrypt($data));
	}

	/**
	 * 解密前 BASE64解密
	 * @param $data
	 * @return string
	 */
	public function decryptBase64($data) {
		$encrypted	=	base64_decode($data);
		return $this->decrypt($encrypted);
	}
}