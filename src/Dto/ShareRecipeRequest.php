<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * ShareRecipeRequest
 */
class ShareRecipeRequest extends SpatieData
{
    public function __construct(
        #[MapName('recipe_id')]
        public ?int $recipeId = null,
    ) {}
}
