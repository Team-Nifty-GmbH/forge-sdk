<?php

namespace TeamNifty\Forge\Requests\RedirectRules;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.sites.redirect-rules.store
 *
 * Add a new redirect rule to the site.
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersSitesRedirectRulesStoreRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  string  $from  The source URL path for the redirect rule.
     * @param  string  $to  The destination URL path for the redirect rule.
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $site,
        protected string $from,
        protected string $to,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['from' => $this->from, 'to' => $this->to]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/sites/{$this->site}/redirect-rules";
    }
}
