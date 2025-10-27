<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * MysqlServiceActionRequest
 */
class MysqlServiceActionRequest extends SpatieData
{
    public function __construct(
        public ?MysqlAction $action = null,
    ) {}
}
