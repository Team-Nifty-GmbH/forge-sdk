<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * RunSiteCommandRequest
 */
class RunSiteCommandRequest extends SpatieData
{
    public function __construct(
        public ?string $command = null,
    ) {}
}
