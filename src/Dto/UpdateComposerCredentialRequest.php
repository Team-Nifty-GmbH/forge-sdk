<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * UpdateComposerCredentialRequest
 */
class UpdateComposerCredentialRequest extends SpatieData
{
    public function __construct(
        public ?string $repository = null,
        public ?string $username = null,
        public ?string $password = null,
    ) {}
}
