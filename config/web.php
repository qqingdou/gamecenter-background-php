<?php
$params = require __DIR__ . '/params.php';
$config = [
	'bootstrap' 	=>	[],
	'id' 			=>	'error-notify',
	'runtimePath' 	=>	'/mnt/nginx_logs/program/error-notify',
	'basePath' 		=>	dirname(__DIR__),
	'controllerNamespace' => 'app\controllers',
	'aliases' => [
		'@bower' => '@vendor/bower-asset',
	],
	'defaultRoute'	=>	'message',
	'params'  		=>	$params,
	'components' 	=>	[
		'request' => [
			'cookieValidationKey' 		=>	true,
			'enableCookieValidation' 	=>	false,
		],
		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'rules' => [
			],
		],
		'errorHandler' => [
			'class' => 'app\components\ErrorHandlerComponent',
		],
		'redis_message'	=>	require __DIR__ . '/db/redis_message.php',
		'log' => [
			'traceLevel' 	=>	YII_DEBUG ? 3 : 0,
			'targets' 		=>	[
				[
					'class'         => 'yii\log\FileTarget',
					'enableRotation' 	=> false,
					'levels'        => ['info', 'trace', 'error', 'warning', 'profile'],
					'logVars' 		=> ['_GET', '_POST', '_SERVER'],
					'prefix' 		=> function($msg){
						return \app\logger\CommonLogger::getLogPreId();
					},
					'logFile'       => '@runtime/cgi_'. date('Ymd') .'.log',
				],
			],
		],
	],
];

return $config;