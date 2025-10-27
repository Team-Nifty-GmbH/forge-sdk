<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * NginxAction
 *
 * | |
 * |---|
 * | `reboot` <br/> Reboot the Nginx service |
 * | `stop` <br/> Stop the Nginx service |
 */
class NginxAction extends SpatieData
{
    public function __construct() {}
}
