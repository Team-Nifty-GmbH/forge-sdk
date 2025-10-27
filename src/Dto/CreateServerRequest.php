<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * CreateServerRequest
 */
class CreateServerRequest extends SpatieData
{
    public function __construct(
        public ?string $name = null,
        public ?string $provider = null,
        #[MapName('credential_id')]
        public ?string $credentialId = null,
        #[MapName('team_id')]
        public ?int $teamId = null,
        public ?ServerType $type = null,
        #[MapName('ubuntu_version')]
        public ?string $ubuntuVersion = null,
        #[MapName('php_version')]
        public ?string $phpVersion = null,
        #[MapName('database_type')]
        public ?string $databaseType = null,
        #[MapName('recipe_id')]
        public ?int $recipeId = null,
        public ?array $tags = null,
        public ?object $aws = null,
        public ?object $ocean2 = null,
        public ?object $hetzner = null,
        public ?object $vultr = null,
        public ?object $akamai = null,
        public ?object $laravel = null,
        public ?object $custom = null,
    ) {}
}
