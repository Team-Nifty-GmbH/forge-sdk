<?php

namespace TeamNifty\Forge\Requests\RedirectRules;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * organizations.servers.sites.redirect-rules.show
 *
 * Get a specific redirect rule associated with the site.
 *
 * Processing mode:
 * <small><code>sync</code></small>
 */
class OrganizationsServersSitesRedirectRulesShowRequest extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $redirectRule  The redirect rule ID
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $site,
        protected int $redirectRule,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/sites/{$this->site}/redirect-rules/{$this->redirectRule}";
    }
}
