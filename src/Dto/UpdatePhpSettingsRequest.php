<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * UpdatePhpSettingsRequest
 */
class UpdatePhpSettingsRequest extends SpatieData
{
    public function __construct(
        #[MapName('max_upload_size')]
        public ?int $maxUploadSize = null,
        #[MapName('max_execution_time')]
        public ?int $maxExecutionTime = null,
        public ?bool $opcache = null,
    ) {}
}
