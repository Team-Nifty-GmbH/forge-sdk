<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * UpdateDomainRequest
 */
class UpdateDomainRequest extends SpatieData
{
    public function __construct(
        #[MapName('www_redirect_type')]
        public ?WwwRedirectType $wwwRedirectType = null,
        #[MapName('allow_wildcard_subdomains')]
        public ?bool $allowWildcardSubdomains = null,
    ) {}
}
