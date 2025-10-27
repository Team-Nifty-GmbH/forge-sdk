<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Attributes extends SpatieData
{
    public function __construct(
        public ?string $content = null,
    ) {}
}
