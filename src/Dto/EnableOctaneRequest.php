<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * EnableOctaneRequest
 */
class EnableOctaneRequest extends SpatieData
{
    public function __construct(
        public ?string $port = null,
        public ?OctaneServer $server = null,
    ) {}
}
