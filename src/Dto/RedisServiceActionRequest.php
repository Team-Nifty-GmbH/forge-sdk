<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * RedisServiceActionRequest
 */
class RedisServiceActionRequest extends SpatieData
{
    public function __construct(
        public ?RedisAction $action = null,
    ) {}
}
