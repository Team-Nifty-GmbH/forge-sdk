<?php

namespace TeamNifty\Forge\Requests\Sites;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * organizations.sites.show
 *
 * Show the specified site.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationsSitesShowRequest extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $site  The site ID
     */
    public function __construct(
        protected string $organization,
        protected int $site,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/sites/{$this->site}";
    }
}
