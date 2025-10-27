<?php

namespace TeamNifty\Forge\Requests\Databases;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.database.password.update
 *
 * Update the password for the database on the server.
 * It will only update the password Forge thinks is
 * the password, it will not change the password on the server itself.
 * This should only be used if you
 * have changed the password on the server itself and want to update Forge.
 *
 * Processing mode:
 * <small><code>sync</code></small>
 */
class OrganizationsServersDatabasePasswordUpdateRequest extends Request implements HasBody
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
        protected string $password,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['password' => $this->password]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/database/password";
    }
}
