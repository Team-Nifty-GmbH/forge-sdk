<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * UpdateTeamMemberRequest
 */
class UpdateTeamMemberRequest extends SpatieData
{
    public function __construct(
        #[MapName('role_id')]
        public ?int $roleId = null,
    ) {}
}
