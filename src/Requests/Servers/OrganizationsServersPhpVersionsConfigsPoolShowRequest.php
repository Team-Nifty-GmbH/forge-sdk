<?php

namespace TeamNifty\Forge\Requests\Servers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * organizations.servers.php.versions.configs.pool.show
 *
 *
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationsServersPhpVersionsConfigsPoolShowRequest extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $phpVersion  The php version ID
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $phpVersion,
        protected ?string $user = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['user' => $this->user]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/php/versions/{$this->phpVersion}/configs/pool";
    }
}
