<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * CreateFirewallRuleRequest
 */
class CreateFirewallRuleRequest extends SpatieData
{
    public function __construct(
        public ?string $name = null,
        public ?string $port = null,
        public ?RuleType $type = null,
        #[MapName('ip_address')]
        public ?object $ipAddress = null,
    ) {}
}
