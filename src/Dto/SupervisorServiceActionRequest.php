<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SupervisorServiceActionRequest
 */
class SupervisorServiceActionRequest extends SpatieData
{
    public function __construct(
        public ?SupervisorAction $action = null,
    ) {}
}
