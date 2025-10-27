<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CreateTeamRequest
 */
class CreateTeamRequest extends SpatieData
{
    public function __construct(
        public ?string $name = null,
        public ?array $users = null,
        public ?array $invites = null,
    ) {}
}
