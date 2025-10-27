<?php

namespace TeamNifty\Forge\Resource;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNifty\Forge\Requests\ServerCredentials\OrganizationsTeamsServerCredentialsDestroyRequest;
use TeamNifty\Forge\Requests\ServerCredentials\OrganizationsTeamsServerCredentialsIndexRequest;
use TeamNifty\Forge\Requests\ServerCredentials\OrganizationsTeamsServerCredentialsStoreRequest;

class ServerCredentials extends BaseResource
{
    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     * @param  int  $credential  The credential ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsTeamsServerCredentialsDestroyRequest(
        string $organization,
        int $team,
        int $credential,
    ): Response {
        return $this->connector->send(new OrganizationsTeamsServerCredentialsDestroyRequest($organization, $team, $credential));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsTeamsServerCredentialsIndexRequest(
        string $organization,
        int $team,
        ?int $pagesize = null,
        ?string $pagecursor = null,
    ): Response {
        return $this->connector->send(new OrganizationsTeamsServerCredentialsIndexRequest($organization, $team, $pagesize, $pagecursor));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsTeamsServerCredentialsStoreRequest(
        string $organization,
        int $team,
        int $credentialId,
    ): Response {
        return $this->connector->send(new OrganizationsTeamsServerCredentialsStoreRequest($organization, $team, $credentialId));
    }
}
