<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * CreateDatabaseUserRequest
 */
class CreateDatabaseUserRequest extends SpatieData
{
    public function __construct(
        public ?string $name = null,
        public ?string $password = null,
        #[MapName('read_only')]
        public ?bool $readOnly = null,
        #[MapName('database_ids')]
        public ?array $databaseIds = null,
    ) {}
}
