<?php

namespace TeamNifty\Forge\Requests\Sites;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.sites.healthcheck.update
 *
 * Update the healthcheck endpoint for the site.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationsServersSitesHealthcheckUpdateRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  null|mixed  $healthcheckEndpoint  The endpoint / URL that should be used to perform healthchecks.
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $site,
        protected mixed $healthcheckEndpoint = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['healthcheck_endpoint' => $this->healthcheckEndpoint]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/sites/{$this->site}/healthcheck";
    }
}
