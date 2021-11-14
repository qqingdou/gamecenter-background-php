<?php
/**
 * Created by PhpStorm.
 * User: Alvin Tang
 * Date: 2021/11/12
 * Time: 18:00
 * Email: pingtang000@foxmail.com
 * Desc: xxx
 */

namespace gamecenter\base;


class GlobalParams extends BaseParams
{
	/**
	 * game id
	 * @var int
	 */
	public $gameId		=	0;
	/**
	 * agent id
	 * @var int
	 */
	public $agentId		=	0;
	/**
	 * site id
	 * @var int
	 */
	public $siteId		=	0;
    /**
     * login after the identify id
     * @var int
     */
	public $userId      =   0;

}