<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * CreateHeartbeatRequest
 */
class CreateHeartbeatRequest extends SpatieData
{
    public function __construct(
        public ?string $name = null,
        #[MapName('grace_period')]
        public ?HeartbeatGracePeriod $gracePeriod = null,
        public ?HeartbeatFrequency $frequency = null,
        #[MapName('custom_frequency')]
        public ?string $customFrequency = null,
    ) {}
}
