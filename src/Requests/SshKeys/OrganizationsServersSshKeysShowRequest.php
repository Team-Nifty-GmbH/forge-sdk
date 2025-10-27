<?php

namespace TeamNifty\Forge\Requests\SshKeys;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * organizations.servers.ssh-keys.show
 *
 * Get a specific SSH key associated with the server.
 *
 * Processing mode:
 * <small><code>sync</code></small>
 */
class OrganizationsServersSshKeysShowRequest extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $key  The key ID
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $key,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/ssh-keys/{$this->key}";
    }
}
