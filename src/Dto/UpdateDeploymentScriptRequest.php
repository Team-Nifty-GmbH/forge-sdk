<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * UpdateDeploymentScriptRequest
 */
class UpdateDeploymentScriptRequest extends SpatieData
{
    public function __construct(
        public ?string $content = null,
        #[MapName('auto_source')]
        public ?bool $autoSource = null,
    ) {}
}
