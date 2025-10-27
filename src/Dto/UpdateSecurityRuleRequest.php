<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * UpdateSecurityRuleRequest
 */
class UpdateSecurityRuleRequest extends SpatieData
{
    public function __construct(
        public ?string $name = null,
        public ?string $path = null,
        public ?array $credentials = null,
    ) {}
}
