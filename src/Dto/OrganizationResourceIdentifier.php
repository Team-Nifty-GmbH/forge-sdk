<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * OrganizationResourceIdentifier
 */
class OrganizationResourceIdentifier extends SpatieData
{
    public function __construct(
        public ?string $type = null,
        public ?string $id = null,
    ) {}
}
