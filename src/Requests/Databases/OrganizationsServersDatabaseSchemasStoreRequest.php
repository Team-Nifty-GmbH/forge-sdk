<?php

namespace TeamNifty\Forge\Requests\Databases;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.database.schemas.store
 *
 * Add a new database schema to the server.
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersDatabaseSchemasStoreRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  string  $name  The name of the database to create.
     * @param  null|mixed  $user  The name of the database user to create. Only needed if a new user should be created alongside the database.
     * @param  null|mixed  $password  The password for the database user. Only used if the user is provided.
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected string $name,
        protected mixed $user = null,
        protected mixed $password = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['name' => $this->name, 'user' => $this->user, 'password' => $this->password]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/database/schemas";
    }
}
