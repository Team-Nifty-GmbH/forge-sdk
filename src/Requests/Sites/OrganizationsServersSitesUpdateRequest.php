<?php

namespace TeamNifty\Forge\Requests\Sites;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.sites.update
 *
 * Update a site on the server.
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersSitesUpdateRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  null|bool  $pushToDeploy  Automatically trigger a new deployment when changes are pushed to the environment's Git branch.
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $site,
        protected mixed $directory = null,
        protected ?bool $pushToDeploy = null,
        protected mixed $repositoryBranch = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter([
            'directory' => $this->directory,
            'push_to_deploy' => $this->pushToDeploy,
            'repository_branch' => $this->repositoryBranch,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/sites/{$this->site}";
    }
}
