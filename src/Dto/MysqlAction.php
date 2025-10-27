<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * MysqlAction
 *
 * | |
 * |---|
 * | `reboot` <br/> Reboot the MySQL service |
 * | `stop` <br/> Stop the MySQL service |
 */
class MysqlAction extends SpatieData
{
    public function __construct() {}
}
