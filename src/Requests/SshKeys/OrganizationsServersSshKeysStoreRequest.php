<?php

namespace TeamNifty\Forge\Requests\SshKeys;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.ssh-keys.store
 *
 * Add a new SSH key to the server.
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersSshKeysStoreRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  string  $name  The name of the SSH key.
     * @param  string  $key  The public SSH key.
     * @param  null|mixed  $user  The user associated with the SSH key.
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected string $name,
        protected string $key,
        protected mixed $user = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['name' => $this->name, 'key' => $this->key, 'user' => $this->user]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/ssh-keys";
    }
}
