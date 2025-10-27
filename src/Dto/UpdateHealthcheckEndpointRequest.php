<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * UpdateHealthcheckEndpointRequest
 */
class UpdateHealthcheckEndpointRequest extends SpatieData
{
    public function __construct(
        #[MapName('healthcheck_endpoint')]
        public ?string $healthcheckEndpoint = null,
    ) {}
}
