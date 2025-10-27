<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * CreateTeamInviteRequest
 */
class CreateTeamInviteRequest extends SpatieData
{
    public function __construct(
        #[MapName('role_id')]
        public ?int $roleId = null,
        public ?string $email = null,
    ) {}
}
