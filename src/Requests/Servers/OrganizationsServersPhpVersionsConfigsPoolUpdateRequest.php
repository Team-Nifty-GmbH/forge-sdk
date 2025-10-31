<?php

namespace TeamNifty\Forge\Requests\Servers;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.php.versions.configs.pool.update
 *
 *
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersPhpVersionsConfigsPoolUpdateRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $phpVersion  The php version ID
     * @param  string  $phpConfig  The PHP pool configuration
     * @param  mixed  $user  The user for the pool
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $phpVersion,
        protected string $phpConfig,
        protected mixed $user = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['config' => $this->phpConfig, 'user' => $this->user]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/php/versions/{$this->phpVersion}/configs/pool";
    }
}
