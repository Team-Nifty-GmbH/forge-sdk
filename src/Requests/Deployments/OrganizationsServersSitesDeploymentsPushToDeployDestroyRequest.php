<?php

namespace TeamNifty\Forge\Requests\Deployments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * organizations.servers.sites.deployments.push-to-deploy.destroy
 *
 * Disable push to deploy for the site.
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersSitesDeploymentsPushToDeployDestroyRequest extends Request
{
    protected Method $method = Method::DELETE;

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
        return "/orgs/{$this->organization}/servers/{$this->server}/sites/{$this->site}/deployments/push-to-deploy";
    }
}
