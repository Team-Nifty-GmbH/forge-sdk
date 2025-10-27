<?php

namespace TeamNifty\Forge\Resource;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNifty\Forge\Requests\Roles\OrganizationsRolesDestroyRequest;
use TeamNifty\Forge\Requests\Roles\OrganizationsRolesIndexRequest;
use TeamNifty\Forge\Requests\Roles\OrganizationsRolesPermissionsIndexRequest;
use TeamNifty\Forge\Requests\Roles\OrganizationsRolesShowRequest;
use TeamNifty\Forge\Requests\Roles\OrganizationsRolesStoreRequest;
use TeamNifty\Forge\Requests\Roles\OrganizationsRolesUpdateRequest;
use TeamNifty\Forge\Requests\Roles\PermissionsIndexRequest;
use TeamNifty\Forge\Requests\Roles\PermissionsShowRequest;
use TeamNifty\Forge\Requests\Roles\PredefinedRolesIndexRequest;
use TeamNifty\Forge\Requests\Roles\PredefinedRolesShowRequest;

class Roles extends BaseResource
{
    /**
     * @param  string  $organization  The organization slug
     * @param  int  $role  The role ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsRolesDestroyRequest(string $organization, int $role): Response
    {
        return $this->connector->send(new OrganizationsRolesDestroyRequest($organization, $role));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  null|string  $include  Available includes are `permissions`, `permissionsCount`, `permissionsExists`. You can include multiple options by separating them with a comma.
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsRolesIndexRequest(
        string $organization,
        ?string $include = null,
        ?int $pagesize = null,
        ?string $pagecursor = null,
        ?string $filtername = null,
        ?string $filterpermissionsName = null,
    ): Response {
        return $this->connector->send(new OrganizationsRolesIndexRequest($organization, $include, $pagesize, $pagecursor, $filtername, $filterpermissionsName));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $role  The role ID
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsRolesPermissionsIndexRequest(
        string $organization,
        int $role,
        ?int $pagesize = null,
        ?string $pagecursor = null,
        ?string $filtername = null,
    ): Response {
        return $this->connector->send(new OrganizationsRolesPermissionsIndexRequest($organization, $role, $pagesize, $pagecursor, $filtername));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $role  The role ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsRolesShowRequest(string $organization, int $role): Response
    {
        return $this->connector->send(new OrganizationsRolesShowRequest($organization, $role));
    }

    /**
     * @param  string  $organization  The organization slug
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsRolesStoreRequest(
        string $organization,
        string $name,
        ?array $permissions = null,
    ): Response {
        return $this->connector->send(new OrganizationsRolesStoreRequest($organization, $name, $permissions));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $role  The role ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsRolesUpdateRequest(string $organization, int $role): Response
    {
        return $this->connector->send(new OrganizationsRolesUpdateRequest($organization, $role));
    }

    /**
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function permissionsIndexRequest(
        ?int $pagesize = null,
        ?string $pagecursor = null,
        ?string $filtername = null,
    ): Response {
        return $this->connector->send(new PermissionsIndexRequest($pagesize, $pagecursor, $filtername));
    }

    /**
     * @param  int  $permission  The permission ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function permissionsShowRequest(int $permission): Response
    {
        return $this->connector->send(new PermissionsShowRequest($permission));
    }

    /**
     * @param  null|string  $include  Available includes are `permissions`, `permissionsCount`, `permissionsExists`. You can include multiple options by separating them with a comma.
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function predefinedRolesIndexRequest(
        ?string $include = null,
        ?int $pagesize = null,
        ?string $pagecursor = null,
        ?string $filtername = null,
        ?string $filterpermissionsName = null,
    ): Response {
        return $this->connector->send(new PredefinedRolesIndexRequest($include, $pagesize, $pagecursor, $filtername, $filterpermissionsName));
    }

    /**
     * @param  int  $role  The role ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function predefinedRolesShowRequest(int $role): Response
    {
        return $this->connector->send(new PredefinedRolesShowRequest($role));
    }
}
