<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CreateServerProviderNetworkRequest
 */
class CreateServerProviderNetworkRequest extends SpatieData
{
    public function __construct(
        public ?string $name = null,
    ) {}
}
