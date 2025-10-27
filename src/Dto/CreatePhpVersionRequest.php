<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * CreatePhpVersionRequest
 */
class CreatePhpVersionRequest extends SpatieData
{
    public function __construct(
        public ?PhpVersion $version = null,
        #[MapName('cli_default')]
        public ?bool $cliDefault = null,
        #[MapName('site_default')]
        public ?bool $siteDefault = null,
    ) {}
}
