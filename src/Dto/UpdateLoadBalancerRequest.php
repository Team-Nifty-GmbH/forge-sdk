<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * UpdateLoadBalancerRequest
 */
class UpdateLoadBalancerRequest extends SpatieData
{
    public function __construct(
        #[MapName('balancer_method')]
        public ?NodeBalancerMethod $balancerMethod = null,
        public ?array $balancing = null,
    ) {}
}
