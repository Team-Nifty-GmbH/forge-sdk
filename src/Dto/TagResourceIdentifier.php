<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * TagResourceIdentifier
 */
class TagResourceIdentifier extends SpatieData
{
    public function __construct(
        public ?string $type = null,
        public ?string $id = null,
    ) {}
}
