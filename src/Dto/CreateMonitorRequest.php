<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CreateMonitorRequest
 */
class CreateMonitorRequest extends SpatieData
{
    public function __construct(
        public ?MonitorMetricType $type = null,
        public ?MonitorOperator $operator = null,
        public int|float|null $threshold = null,
        public ?int $minutes = null,
        public ?string $notify = null,
    ) {}
}
