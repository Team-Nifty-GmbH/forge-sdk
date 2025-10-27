<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * UpdatePhpCliVersionRequest
 */
class UpdatePhpCliVersionRequest extends SpatieData
{
    public function __construct(
        #[MapName('php_version')]
        public ?string $phpVersion = null,
    ) {}
}
