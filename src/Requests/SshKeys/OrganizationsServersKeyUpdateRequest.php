<?php

namespace TeamNifty\Forge\Requests\SshKeys;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.key.update
 *
 * Regenerate the SSH key pair for the server and return the new public key.
 *
 * Processing mode:
 * <small><code>sync</code></small>
 */
class OrganizationsServersKeyUpdateRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     */
    public function __construct(
        protected string $organization,
        protected int $server,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/key";
    }
}
