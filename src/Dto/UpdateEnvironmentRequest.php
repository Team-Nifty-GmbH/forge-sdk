<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * UpdateEnvironmentRequest
 */
class UpdateEnvironmentRequest extends SpatieData
{
    public function __construct(
        public ?string $environment = null,
        public ?bool $cache = null,
        public ?bool $queues = null,
        #[MapName('encryption_key')]
        public ?string $encryptionKey = null,
    ) {}
}
