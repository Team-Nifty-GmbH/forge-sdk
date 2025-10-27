<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * UpdatePhpPoolRequest
 */
class UpdatePhpPoolRequest extends SpatieData
{
    public function __construct(
        public ?string $config = null,
        public ?string $user = null,
    ) {}
}
