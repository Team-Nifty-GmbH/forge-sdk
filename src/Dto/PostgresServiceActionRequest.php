<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * PostgresServiceActionRequest
 */
class PostgresServiceActionRequest extends SpatieData
{
    public function __construct(
        public ?PostgresAction $action = null,
    ) {}
}
