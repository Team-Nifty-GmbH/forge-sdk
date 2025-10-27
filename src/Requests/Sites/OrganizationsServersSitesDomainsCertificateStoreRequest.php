<?php

namespace TeamNifty\Forge\Requests\Sites;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.sites.domains.certificate.store
 *
 * Create a new certificate for a given domain.
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersSitesDomainsCertificateStoreRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $domainRecord  The domain record ID
     * @param  null|array  $letsencrypt  The configuration for a Let's Encrypt certificate.
     * @param  null|array  $existing  The configuration for an existing certificate.
     * @param  null|array  $csr  The configuration for a CSR (Certificate Signing Request).
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $site,
        protected int $domainRecord,
        protected ?array $letsencrypt = null,
        protected ?array $existing = null,
        protected ?array $csr = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['letsencrypt' => $this->letsencrypt, 'existing' => $this->existing, 'csr' => $this->csr]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/sites/{$this->site}/domains/{$this->domainRecord}/certificate";
    }
}
