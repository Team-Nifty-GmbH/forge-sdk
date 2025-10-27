<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * EnableMaintenanceModeRequest
 */
class EnableMaintenanceModeRequest extends SpatieData
{
    public function __construct(
        public ?string $secret = null,
        public ?MaintenanceModeStatusCode $status = null,
        public ?string $redirect = null,
    ) {}
}
