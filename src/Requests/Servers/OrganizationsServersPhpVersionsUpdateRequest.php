<?php

namespace TeamNifty\Forge\Requests\Servers;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.php.versions.update
 *
 * Update PHP version to the latest patch release
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersPhpVersionsUpdateRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $phpVersion  The php version ID
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $phpVersion,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/php/versions/{$this->phpVersion}";
    }
}
