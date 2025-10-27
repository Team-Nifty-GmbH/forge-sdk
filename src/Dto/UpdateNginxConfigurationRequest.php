<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * UpdateNginxConfigurationRequest
 */
class UpdateNginxConfigurationRequest extends SpatieData
{
    public function __construct(
        public ?string $config = null,
    ) {}
}
