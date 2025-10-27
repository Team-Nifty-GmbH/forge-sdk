<?php

namespace TeamNifty\Forge\Requests\Sites;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.sites.domains.store
 *
 * Add a new domain to the site
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersSitesDomainsStoreRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  string  $name  The name of the domain.
     * @param  bool  $allowWildcardSubdomains  Whether to allow wildcard subdomains for the domain.
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $site,
        protected string $name,
        protected bool $allowWildcardSubdomains,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['name' => $this->name, 'allow_wildcard_subdomains' => $this->allowWildcardSubdomains]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/sites/{$this->site}/domains";
    }
}
