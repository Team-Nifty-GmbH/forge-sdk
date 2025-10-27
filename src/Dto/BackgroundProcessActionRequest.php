<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BackgroundProcessActionRequest
 */
class BackgroundProcessActionRequest extends SpatieData
{
    public function __construct(
        public ?BackgroundProcessAction $action = null,
    ) {}
}
