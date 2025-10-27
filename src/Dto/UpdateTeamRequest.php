<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * UpdateTeamRequest
 */
class UpdateTeamRequest extends SpatieData
{
    public function __construct(
        public ?string $name = null,
        public ?array $users = null,
    ) {}
}
