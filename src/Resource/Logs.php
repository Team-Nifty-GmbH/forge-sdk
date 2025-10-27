<?php

namespace TeamNifty\Forge\Resource;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNifty\Forge\Requests\Logs\OrganizationsServersLogsDestroyRequest;
use TeamNifty\Forge\Requests\Logs\OrganizationsServersLogsShowRequest;

class Logs extends BaseResource
{
    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersLogsDestroyRequest(string $organization, int $server, string $key): Response
    {
        return $this->connector->send(new OrganizationsServersLogsDestroyRequest($organization, $server, $key));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersLogsShowRequest(string $organization, int $server, string $key): Response
    {
        return $this->connector->send(new OrganizationsServersLogsShowRequest($organization, $server, $key));
    }
}
