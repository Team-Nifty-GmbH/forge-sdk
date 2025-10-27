<?php

namespace TeamNifty\Forge\Resource;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNifty\Forge\Requests\SshKeys\OrganizationsServersKeyShowRequest;
use TeamNifty\Forge\Requests\SshKeys\OrganizationsServersKeyUpdateRequest;
use TeamNifty\Forge\Requests\SshKeys\OrganizationsServersSshKeysDestroyRequest;
use TeamNifty\Forge\Requests\SshKeys\OrganizationsServersSshKeysIndexRequest;
use TeamNifty\Forge\Requests\SshKeys\OrganizationsServersSshKeysShowRequest;
use TeamNifty\Forge\Requests\SshKeys\OrganizationsServersSshKeysStoreRequest;

class SshKeys extends BaseResource
{
    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersKeyShowRequest(string $organization, int $server): Response
    {
        return $this->connector->send(new OrganizationsServersKeyShowRequest($organization, $server));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersKeyUpdateRequest(string $organization, int $server): Response
    {
        return $this->connector->send(new OrganizationsServersKeyUpdateRequest($organization, $server));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $key  The key ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSshKeysDestroyRequest(string $organization, int $server, int $key): Response
    {
        return $this->connector->send(new OrganizationsServersSshKeysDestroyRequest($organization, $server, $key));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSshKeysIndexRequest(
        string $organization,
        int $server,
        ?int $pagesize = null,
        ?string $pagecursor = null,
        ?string $filtername = null,
        ?string $filteruser = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersSshKeysIndexRequest($organization, $server, $pagesize, $pagecursor, $filtername, $filteruser));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $key  The key ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSshKeysShowRequest(string $organization, int $server, int $key): Response
    {
        return $this->connector->send(new OrganizationsServersSshKeysShowRequest($organization, $server, $key));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  string  $name  The name of the SSH key.
     * @param  string  $key  The public SSH key.
     * @param  null|mixed  $user  The user associated with the SSH key.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSshKeysStoreRequest(
        string $organization,
        int $server,
        string $name,
        string $key,
        mixed $user = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersSshKeysStoreRequest($organization, $server, $name, $key, $user));
    }
}
