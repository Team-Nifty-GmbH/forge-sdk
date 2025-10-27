<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * DomainActionRequest
 */
class DomainActionRequest extends SpatieData
{
    public function __construct(
        public ?DomainRecordAction $action = null,
    ) {}
}
