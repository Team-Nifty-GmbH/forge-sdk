<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * PhpServiceActionRequest
 */
class PhpServiceActionRequest extends SpatieData
{
    public function __construct(
        public ?PhpAction $action = null,
        public ?PhpVersion $version = null,
    ) {}
}
