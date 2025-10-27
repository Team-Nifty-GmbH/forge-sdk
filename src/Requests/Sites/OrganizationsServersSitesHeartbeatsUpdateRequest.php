<?php

namespace TeamNifty\Forge\Requests\Sites;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.sites.heartbeats.update
 *
 * Update a specific heartbeat for the site.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationsServersSitesHeartbeatsUpdateRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $heartbeat  The heartbeat ID
     * @param  string  $name  The name of the heartbeat.
     * @param  null|string  $customFrequency  A cron expression representing the custom frequency at which the client is expected to send a ping, if the frequency is set to -1.
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $site,
        protected int $heartbeat,
        protected string $name,
        protected ?string $customFrequency = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['name' => $this->name, 'custom_frequency' => $this->customFrequency]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/sites/{$this->site}/heartbeats/{$this->heartbeat}";
    }
}
