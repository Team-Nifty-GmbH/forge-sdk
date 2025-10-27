<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * CreateScheduledJobRequest
 */
class CreateScheduledJobRequest extends SpatieData
{
    public function __construct(
        public ?string $name = null,
        public ?string $command = null,
        public ?string $user = null,
        public ?CronFrequency $frequency = null,
        public ?string $cron = null,
        public ?bool $heartbeat = null,
        #[MapName('grace_period')]
        public ?string $gracePeriod = null,
    ) {}
}
