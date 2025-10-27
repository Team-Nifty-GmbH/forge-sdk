<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * DomainRecordResource
 */
class DomainRecordResource extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $type = null,
        public ?object $attributes = null,
        public ?object $links = null,
    ) {}
}
