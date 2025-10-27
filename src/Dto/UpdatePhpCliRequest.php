<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * UpdatePhpCliRequest
 */
class UpdatePhpCliRequest extends SpatieData
{
    public function __construct(
        public ?string $config = null,
    ) {}
}
