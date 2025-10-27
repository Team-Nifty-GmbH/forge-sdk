<?php

namespace TeamNifty\Forge\Requests\FirewallRules;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.firewall-rules.store
 *
 * Add a new firewall rule to the server.
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersFirewallRulesStoreRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected string $name,
        protected mixed $port = null,
        protected ?array $ipAddress = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['name' => $this->name, 'port' => $this->port, 'ip_address' => $this->ipAddress]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/firewall-rules";
    }
}
