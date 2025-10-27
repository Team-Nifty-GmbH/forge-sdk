<?php

namespace TeamNifty\Forge\Requests\BackgroundProcesses;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * organizations.servers.background-processes.log.show
 *
 *
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationsServersBackgroundProcessesLogShowRequest extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $backgroundProcess  The background process ID
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $backgroundProcess,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/background-processes/{$this->backgroundProcess}/log";
    }
}
