<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * EnableReverbRequest
 */
class EnableReverbRequest extends SpatieData
{
    public function __construct(
        public ?string $host = null,
        public ?string $port = null,
        public ?int $connections = null,
    ) {}
}
