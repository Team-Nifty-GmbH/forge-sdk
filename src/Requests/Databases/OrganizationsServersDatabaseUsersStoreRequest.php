<?php

namespace TeamNifty\Forge\Requests\Databases;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.database.users.store
 *
 * Add a new database user to the server.
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersDatabaseUsersStoreRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  string  $name  The name of the database user to create.
     * @param  string  $password  The password for the database user.
     * @param  null|bool  $readOnly  Whether the user should have read-only access to the databases.
     * @param  null|array  $databaseIds  The IDs of the databases to assign the user to.
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected string $name,
        protected string $password,
        protected ?bool $readOnly = null,
        protected ?array $databaseIds = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter([
            'name' => $this->name,
            'password' => $this->password,
            'read_only' => $this->readOnly,
            'database_ids' => $this->databaseIds,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/database/users";
    }
}
