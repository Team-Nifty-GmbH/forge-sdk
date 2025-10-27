<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CreateBackgroundProcessRequest
 */
class CreateBackgroundProcessRequest extends SpatieData
{
    public function __construct(
        public ?string $name = null,
        public ?string $command = null,
        public ?string $user = null,
        public ?string $directory = null,
        public ?int $processes = null,
        public ?int $startsecs = null,
        public ?int $stopwaitsecs = null,
        public ?string $stopsignal = null,
    ) {}
}
