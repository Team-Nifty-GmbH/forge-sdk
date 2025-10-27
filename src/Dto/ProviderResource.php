<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * ProviderResource
 */
class ProviderResource extends SpatieData
{
    public function __construct(
        public ?string $id = null,
        public ?string $type = null,
        public ?object $attributes = null,
        public ?object $links = null,
    ) {}
}
