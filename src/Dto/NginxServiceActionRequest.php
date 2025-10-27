<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * NginxServiceActionRequest
 */
class NginxServiceActionRequest extends SpatieData
{
    public function __construct(
        public ?NginxAction $action = null,
    ) {}
}
