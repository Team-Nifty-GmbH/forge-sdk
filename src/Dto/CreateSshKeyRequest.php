<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CreateSshKeyRequest
 */
class CreateSshKeyRequest extends SpatieData
{
    public function __construct(
        public ?string $name = null,
        public ?string $key = null,
        public ?string $user = null,
    ) {}
}
