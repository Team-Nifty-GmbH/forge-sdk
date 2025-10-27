<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * UserResourceIdentifier
 */
class UserResourceIdentifier extends SpatieData
{
    public function __construct(
        public ?string $type = null,
        public ?string $id = null,
    ) {}
}
