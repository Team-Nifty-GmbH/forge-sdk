<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CreateRedirectRequest
 */
class CreateRedirectRequest extends SpatieData
{
    public function __construct(
        public ?string $from = null,
        public ?string $to = null,
        public ?RedirectRuleType $type = null,
    ) {}
}
