<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CreateRoleRequest
 */
class CreateRoleRequest extends SpatieData
{
    public function __construct(
        public ?string $name = null,
        public ?array $permissions = null,
    ) {}
}
