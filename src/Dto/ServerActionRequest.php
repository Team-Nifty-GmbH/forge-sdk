<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * ServerActionRequest
 */
class ServerActionRequest extends SpatieData
{
    public function __construct(
        public ?ServerAction $action = null,
    ) {}
}
