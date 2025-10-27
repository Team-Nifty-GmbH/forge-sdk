<?php

namespace TeamNifty\Forge\Requests\Monitors;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.monitors.store
 *
 * Add a new monitor to the server.
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersMonitorsStoreRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  float|int  $threshold  The threshold to alert on once breached.
     * @param  null|int  $minutes  The frequency in minutes to evaluate the monitor.
     * @param  string  $notify  The email address to notify when the monitor is in an alert state.
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected float|int $threshold,
        protected ?int $minutes,
        protected string $notify,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['threshold' => $this->threshold, 'minutes' => $this->minutes, 'notify' => $this->notify]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/monitors";
    }
}
