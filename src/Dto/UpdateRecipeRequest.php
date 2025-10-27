<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * UpdateRecipeRequest
 */
class UpdateRecipeRequest extends SpatieData
{
    public function __construct(
        public ?string $name = null,
        public ?string $user = null,
        public ?string $script = null,
    ) {}
}
