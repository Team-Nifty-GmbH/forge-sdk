<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * UpdateSiteRequest
 */
class UpdateSiteRequest extends SpatieData
{
    public function __construct(
        public ?string $directory = null,
        public ?SiteType $type = null,
        #[MapName('php_version')]
        public ?PhpVersion $phpVersion = null,
        #[MapName('push_to_deploy')]
        public ?bool $pushToDeploy = null,
        #[MapName('repository_branch')]
        public ?string $repositoryBranch = null,
    ) {}
}
