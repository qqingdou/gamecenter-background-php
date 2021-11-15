<?php
/**
 * Created by PhpStorm.
 * User: Alvin Tang
 * Date: 2021/11/15
 * Time: 19:18
 * Email: pingtang000@foxmail.com
 * Desc: xxx
 */

namespace gamecenter\base;


use gamecenter\common\security\AesCrypt;
use yii\helpers\Json;

class CryptParams extends BaseParams
{
	/**
	 * UNIX TIME second
	 * @var int
	 */
	public $time	=	0;
	/**
	 * nonce str
	 * @var string
	 */
	public $nonce	=	'';
	/**
	 * MD5 sign str
	 * @var string
	 */
	public $sign	=	'';
	/**
	 * AES crypt data
	 * @var string
	 */
	public $data	=	'';
	/**
	 * the aes decrypt data json
	 * @var null
	 */
	public $dataJson	=	null;

	/**
	 * 校验MD5加密
	 * @param $key
	 * @return bool
	 */
	public function checkSign($key){
		$signParams		=	$this->buildSignParams();
		ksort($signParams);
		$signStr		=	$this->getSignStr($signParams);
		$mySign			=	md5($signStr . $key);
		return	$mySign == $this->sign;
	}

	/**
	 * 构建加密字符串
	 * @param $params
	 * @return string
	 */
	protected function getSignStr($params){
		$strArray	=	[];
		foreach ($params as $key => $value){
			array_push($strArray, sprintf('%s=%s', $key, $value));
		}
		return	implode('&', $strArray);
	}

	/**
	 * 构建MD5加密参数
	 * @return array
	 */
	protected function buildSignParams(){
		return	[
			'time'		=>	$this->time,
			'nonce'		=>	$this->nonce,
			'data'		=>	$this->data,
		];
	}

	/**
	 * AES解密
	 * @param string $aesKey
	 * @return bool
	 */
	public function dataAesDecrypt($aesKey = ''){
		$data	=	$this->data;
		if($data){
			$myAesCrypt			=	new AesCrypt();
			$myAesCrypt->aesKey	=	$aesKey	?: (\Yii::$app->params['AES_KEY'] ?? '');
			$aesDecryptData		=	$myAesCrypt->decryptBase64($data);
			if($aesDecryptData){
				$aesDecryptDataJson	=	Json::decode($aesDecryptData, true);

				if($aesDecryptDataJson){
					$this->dataJson	=	$aesDecryptDataJson;
					GlobalParams::getSingleton($aesDecryptDataJson);
					return true;
				}
			}
		}
		return false;
	}
}