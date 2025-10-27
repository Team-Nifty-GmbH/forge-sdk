<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * ShareCredentialRequest
 */
class ShareCredentialRequest extends SpatieData
{
    public function __construct(
        #[MapName('credential_id')]
        public ?int $credentialId = null,
    ) {}
}
