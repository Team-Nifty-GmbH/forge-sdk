<?php

namespace TeamNifty\Forge\Requests\Logs;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * organizations.servers.logs.destroy
 *
 *
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersLogsDestroyRequest extends Request
{
    protected Method $method = Method::DELETE;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected string $key,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/logs/{$this->key}";
    }
}
