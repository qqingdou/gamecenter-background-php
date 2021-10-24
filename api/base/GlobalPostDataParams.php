<?php
/**
 * Created by PhpStorm.
 * User: tangping
 * Date: 2021/10/24
 * Time: 23:18
 */

namespace gamecenter\api\base;


class GlobalPostDataParams extends BaseParams
{
    public $gameId;

    /**
     * @return mixed
     */
    public function getGameId()
    {
        return $this->gameId;
    }

    /**
     * @param mixed $gameId
     */
    public function setGameId($gameId)
    {
        $this->gameId = $gameId;
    }
}