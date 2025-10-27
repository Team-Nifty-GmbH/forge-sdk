<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CreateDomainCertificateRequest
 */
class CreateDomainCertificateRequest extends SpatieData
{
    public function __construct(
        public ?CertificateType $type = null,
        public ?object $letsencrypt = null,
        public ?object $existing = null,
        public ?object $csr = null,
    ) {}
}
