<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * PostgresAction
 *
 * | |
 * |---|
 * | `reboot` <br/> Reboot the Postgres service |
 * | `stop` <br/> Stop the Postgres service |
 */
class PostgresAction extends SpatieData
{
    public function __construct() {}
}
