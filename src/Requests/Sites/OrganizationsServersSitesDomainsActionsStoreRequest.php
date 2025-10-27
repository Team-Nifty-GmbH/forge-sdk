<?php

namespace TeamNifty\Forge\Requests\Sites;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.sites.domains.actions.store
 *
 * Run an action on a domain, defined by the action type parameter.
 *
 * Processing mode:
 * <small><code>async</code></small>
 */
class OrganizationsServersSitesDomainsActionsStoreRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $domainRecord  The domain record ID
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $site,
        protected int $domainRecord,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/sites/{$this->site}/domains/{$this->domainRecord}/actions";
    }
}
