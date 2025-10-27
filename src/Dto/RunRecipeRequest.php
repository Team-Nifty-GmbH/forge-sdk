<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * RunRecipeRequest
 */
class RunRecipeRequest extends SpatieData
{
    public function __construct(
        public ?bool $email = null,
        public ?array $servers = null,
    ) {}
}
