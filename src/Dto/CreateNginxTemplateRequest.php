<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CreateNginxTemplateRequest
 */
class CreateNginxTemplateRequest extends SpatieData
{
    public function __construct(
        public ?string $name = null,
        public ?string $content = null,
    ) {}
}
