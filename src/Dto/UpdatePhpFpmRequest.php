<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * UpdatePhpFpmRequest
 */
class UpdatePhpFpmRequest extends SpatieData
{
    public function __construct(
        public ?string $config = null,
    ) {}
}
