<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * UpdateDatabasePasswordRequest
 */
class UpdateDatabasePasswordRequest extends SpatieData
{
    public function __construct(
        public ?string $password = null,
    ) {}
}
