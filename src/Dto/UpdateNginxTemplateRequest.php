<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * UpdateNginxTemplateRequest
 */
class UpdateNginxTemplateRequest extends SpatieData
{
    public function __construct(
        public ?string $name = null,
        public ?string $content = null,
    ) {}
}
