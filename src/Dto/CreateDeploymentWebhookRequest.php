<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CreateDeploymentWebhookRequest
 */
class CreateDeploymentWebhookRequest extends SpatieData
{
    public function __construct(
        public ?string $url = null,
    ) {}
}
