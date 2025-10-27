<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * CreateRecipeRequest
 */
class CreateRecipeRequest extends SpatieData
{
    public function __construct(
        public ?string $name = null,
        public ?string $user = null,
        public ?string $script = null,
        #[MapName('team_id')]
        public ?string $teamId = null,
    ) {}
}
