<?php

namespace TeamNifty\Forge\Requests\Monitors;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * organizations.servers.monitors.show
 *
 * Get a specific monitor associated with the server.
 *
 * Processing mode:
 * <small><code>sync</code></small>
 */
class OrganizationsServersMonitorsShowRequest extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $monitor  The monitor ID
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $monitor,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/monitors/{$this->monitor}";
    }
}
