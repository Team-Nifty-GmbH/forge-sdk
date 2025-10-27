<?php

namespace TeamNifty\Forge\Requests\Sites;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.sites.domains.update
 *
 * Update an existing domain for the site
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersSitesDomainsUpdateRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $domainRecord  The domain record ID
     * @param  null|mixed  $allowWildcardSubdomains  Whether to allow wildcard subdomains for the domain.
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $site,
        protected int $domainRecord,
        protected mixed $allowWildcardSubdomains = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['allow_wildcard_subdomains' => $this->allowWildcardSubdomains]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/sites/{$this->site}/domains/{$this->domainRecord}";
    }
}
