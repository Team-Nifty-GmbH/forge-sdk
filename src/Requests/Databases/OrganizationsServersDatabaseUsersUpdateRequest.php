<?php

namespace TeamNifty\Forge\Requests\Databases;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.database.users.update
 *
 * Update a database user on the server.
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersDatabaseUsersUpdateRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $databaseUser  The database user ID
     * @param  null|mixed  $password  The password for the database user.
     * @param  null|array  $databaseIds  The IDs of the databases to assign the user to.
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $databaseUser,
        protected mixed $password = null,
        protected ?array $databaseIds = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['password' => $this->password, 'database_ids' => $this->databaseIds]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/database/users/{$this->databaseUser}";
    }
}
