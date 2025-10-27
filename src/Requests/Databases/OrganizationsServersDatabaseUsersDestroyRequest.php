<?php

namespace TeamNifty\Forge\Requests\Databases;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * organizations.servers.database.users.destroy
 *
 * Remove a database user from the server.
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersDatabaseUsersDestroyRequest extends Request
{
    protected Method $method = Method::DELETE;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $databaseUser  The database user ID
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $databaseUser,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/database/users/{$this->databaseUser}";
    }
}
