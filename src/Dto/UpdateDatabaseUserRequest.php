<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * UpdateDatabaseUserRequest
 */
class UpdateDatabaseUserRequest extends SpatieData
{
    public function __construct(
        public ?string $password = null,
        #[MapName('database_ids')]
        public ?array $databaseIds = null,
    ) {}
}
