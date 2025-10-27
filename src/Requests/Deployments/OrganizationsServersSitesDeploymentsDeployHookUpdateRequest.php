<?php

namespace TeamNifty\Forge\Requests\Deployments;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.sites.deployments.deploy-hook.update
 *
 * Regenerate the deployment hook token used for triggering deployment on the deployment
 * URL.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationsServersSitesDeploymentsDeployHookUpdateRequest extends Request implements HasBody
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
    ) {}

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/sites/{$this->site}/deployments/deploy-hook";
    }
}
