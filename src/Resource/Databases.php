<?php

namespace TeamNifty\Forge\Resource;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNifty\Forge\Requests\Databases\OrganizationsServersDatabasePasswordUpdateRequest;
use TeamNifty\Forge\Requests\Databases\OrganizationsServersDatabaseSchemasDestroyRequest;
use TeamNifty\Forge\Requests\Databases\OrganizationsServersDatabaseSchemasIndexRequest;
use TeamNifty\Forge\Requests\Databases\OrganizationsServersDatabaseSchemasShowRequest;
use TeamNifty\Forge\Requests\Databases\OrganizationsServersDatabaseSchemasStoreRequest;
use TeamNifty\Forge\Requests\Databases\OrganizationsServersDatabaseSchemasSynchronizationsStoreRequest;
use TeamNifty\Forge\Requests\Databases\OrganizationsServersDatabaseUsersDestroyRequest;
use TeamNifty\Forge\Requests\Databases\OrganizationsServersDatabaseUsersIndexRequest;
use TeamNifty\Forge\Requests\Databases\OrganizationsServersDatabaseUsersShowRequest;
use TeamNifty\Forge\Requests\Databases\OrganizationsServersDatabaseUsersStoreRequest;
use TeamNifty\Forge\Requests\Databases\OrganizationsServersDatabaseUsersUpdateRequest;

class Databases extends BaseResource
{
    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersDatabasePasswordUpdateRequest(
        string $organization,
        int $server,
        string $password,
    ): Response {
        return $this->connector->send(new OrganizationsServersDatabasePasswordUpdateRequest($organization, $server, $password));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $database  The database ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersDatabaseSchemasDestroyRequest(
        string $organization,
        int $server,
        int $database,
    ): Response {
        return $this->connector->send(new OrganizationsServersDatabaseSchemasDestroyRequest($organization, $server, $database));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  null|string  $sort  Available sorts are `name`, `created_at`, `updated_at`. You can sort by multiple options by separating them with a comma. To sort in descending order, use `-` sign in front of the sort, for example: `-name`.
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     * @param  null|string  $filtername  The name of the database schema.
     * @param  null|string  $filterstatus  The status of the database schema.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersDatabaseSchemasIndexRequest(
        string $organization,
        int $server,
        ?string $sort = null,
        ?int $pagesize = null,
        ?string $pagecursor = null,
        ?string $filtername = null,
        ?string $filterstatus = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersDatabaseSchemasIndexRequest($organization, $server, $sort, $pagesize, $pagecursor, $filtername, $filterstatus));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $database  The database ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersDatabaseSchemasShowRequest(
        string $organization,
        int $server,
        int $database,
    ): Response {
        return $this->connector->send(new OrganizationsServersDatabaseSchemasShowRequest($organization, $server, $database));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  string  $name  The name of the database to create.
     * @param  null|mixed  $user  The name of the database user to create. Only needed if a new user should be created alongside the database.
     * @param  null|mixed  $password  The password for the database user. Only used if the user is provided.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersDatabaseSchemasStoreRequest(
        string $organization,
        int $server,
        string $name,
        mixed $user = null,
        mixed $password = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersDatabaseSchemasStoreRequest($organization, $server, $name, $user, $password));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersDatabaseSchemasSynchronizationsStoreRequest(
        string $organization,
        int $server,
    ): Response {
        return $this->connector->send(new OrganizationsServersDatabaseSchemasSynchronizationsStoreRequest($organization, $server));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $databaseUser  The database user ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersDatabaseUsersDestroyRequest(
        string $organization,
        int $server,
        int $databaseUser,
    ): Response {
        return $this->connector->send(new OrganizationsServersDatabaseUsersDestroyRequest($organization, $server, $databaseUser));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  null|string  $sort  Available sorts are `name`, `created_at`, `updated_at`. You can sort by multiple options by separating them with a comma. To sort in descending order, use `-` sign in front of the sort, for example: `-name`.
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     * @param  null|string  $filtername  The name of the database user.
     * @param  null|string  $filterstatus  The status of the database user.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersDatabaseUsersIndexRequest(
        string $organization,
        int $server,
        ?string $sort = null,
        ?int $pagesize = null,
        ?string $pagecursor = null,
        ?string $filtername = null,
        ?string $filterstatus = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersDatabaseUsersIndexRequest($organization, $server, $sort, $pagesize, $pagecursor, $filtername, $filterstatus));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $databaseUser  The database user ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersDatabaseUsersShowRequest(
        string $organization,
        int $server,
        int $databaseUser,
    ): Response {
        return $this->connector->send(new OrganizationsServersDatabaseUsersShowRequest($organization, $server, $databaseUser));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  string  $name  The name of the database user to create.
     * @param  string  $password  The password for the database user.
     * @param  null|bool  $readOnly  Whether the user should have read-only access to the databases.
     * @param  null|array  $databaseIds  The IDs of the databases to assign the user to.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersDatabaseUsersStoreRequest(
        string $organization,
        int $server,
        string $name,
        string $password,
        ?bool $readOnly = null,
        ?array $databaseIds = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersDatabaseUsersStoreRequest($organization, $server, $name, $password, $readOnly, $databaseIds));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $databaseUser  The database user ID
     * @param  null|mixed  $password  The password for the database user.
     * @param  null|array  $databaseIds  The IDs of the databases to assign the user to.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersDatabaseUsersUpdateRequest(
        string $organization,
        int $server,
        int $databaseUser,
        mixed $password = null,
        ?array $databaseIds = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersDatabaseUsersUpdateRequest($organization, $server, $databaseUser, $password, $databaseIds));
    }
}
