<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * CreateDomainRequest
 */
class CreateDomainRequest extends SpatieData
{
    public function __construct(
        public ?string $name = null,
        #[MapName('allow_wildcard_subdomains')]
        public ?bool $allowWildcardSubdomains = null,
        #[MapName('www_redirect_type')]
        public ?WwwRedirectType $wwwRedirectType = null,
    ) {}
}
