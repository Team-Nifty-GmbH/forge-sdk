<?php

namespace TeamNifty\Forge\Requests\FirewallRules;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * organizations.servers.firewall-rules.destroy
 *
 * Remove a firewall rule from the server.
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersFirewallRulesDestroyRequest extends Request
{
    protected Method $method = Method::DELETE;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $rule  The rule ID
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $rule,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/firewall-rules/{$this->rule}";
    }
}
