<?php

namespace TeamNifty\Forge\Resource;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNifty\Forge\Requests\Organizations\OrganizationsIndexRequest;
use TeamNifty\Forge\Requests\Organizations\OrganizationsServerCredentialsIndexRequest;
use TeamNifty\Forge\Requests\Organizations\OrganizationsServerCredentialsShowRequest;
use TeamNifty\Forge\Requests\Organizations\OrganizationsServerCredentialsVpcsIndexRequest;
use TeamNifty\Forge\Requests\Organizations\OrganizationsServerCredentialsVpcsShowRequest;
use TeamNifty\Forge\Requests\Organizations\OrganizationsServerCredentialsVpcsStoreRequest;
use TeamNifty\Forge\Requests\Organizations\OrganizationsShowRequest;

class Organizations extends BaseResource
{
    /**
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsIndexRequest(?int $pagesize = null, ?string $pagecursor = null): Response
    {
        return $this->connector->send(new OrganizationsIndexRequest($pagesize, $pagecursor));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServerCredentialsIndexRequest(
        string $organization,
        ?int $pagesize = null,
        ?string $pagecursor = null,
    ): Response {
        return $this->connector->send(new OrganizationsServerCredentialsIndexRequest($organization, $pagesize, $pagecursor));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $credential  The credential ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServerCredentialsShowRequest(string $organization, int $credential): Response
    {
        return $this->connector->send(new OrganizationsServerCredentialsShowRequest($organization, $credential));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $credential  The credential ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServerCredentialsVpcsIndexRequest(
        string $organization,
        int $credential,
        string $region,
    ): Response {
        return $this->connector->send(new OrganizationsServerCredentialsVpcsIndexRequest($organization, $credential, $region));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $credential  The credential ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServerCredentialsVpcsShowRequest(
        string $organization,
        int $credential,
        string $region,
        string $vpcId,
    ): Response {
        return $this->connector->send(new OrganizationsServerCredentialsVpcsShowRequest($organization, $credential, $region, $vpcId));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $credential  The credential ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServerCredentialsVpcsStoreRequest(
        string $organization,
        int $credential,
        string $region,
        string $name,
    ): Response {
        return $this->connector->send(new OrganizationsServerCredentialsVpcsStoreRequest($organization, $credential, $region, $name));
    }

    /**
     * @param  string  $organization  The organization slug
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsShowRequest(string $organization): Response
    {
        return $this->connector->send(new OrganizationsShowRequest($organization));
    }
}
