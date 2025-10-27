<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BackgroundProcessAction
 *
 * | |
 * |---|
 * | `restart` <br/> Restart the background process |
 * | `stop` <br/> Stop the background
 * process |
 * | `start` <br/> Start the background process |
 * | `empty-log` <br/> Empty the background
 * process log |
 */
class BackgroundProcessAction extends SpatieData
{
    public function __construct() {}
}
