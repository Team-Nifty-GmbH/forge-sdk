<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Link
 */
class Link extends SpatieData
{
    public function __construct(
        public ?string $href = null,
        public ?string $rel = null,
        public ?string $describedby = null,
        public ?string $title = null,
        public ?string $type = null,
        public mixed $hreflang = null,
        public ?object $meta = null,
    ) {}
}
