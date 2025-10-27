<?php

namespace TeamNifty\Forge\Requests\Sites;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.sites.load-balancing-nodes.update
 *
 *
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersSitesLoadBalancingNodesUpdateRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $site,
        protected array $balancing,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['balancing' => $this->balancing]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/sites/{$this->site}/load-balancing-nodes";
    }
}
