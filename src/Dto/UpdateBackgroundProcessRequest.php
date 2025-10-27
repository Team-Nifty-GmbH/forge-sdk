<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * UpdateBackgroundProcessRequest
 */
class UpdateBackgroundProcessRequest extends SpatieData
{
    public function __construct(
        public ?string $name = null,
        public ?string $config = null,
    ) {}
}
