<?php

namespace TeamNifty\Forge\Resource;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNifty\Forge\Requests\Monitors\OrganizationsServersMonitorsDestroyRequest;
use TeamNifty\Forge\Requests\Monitors\OrganizationsServersMonitorsIndexRequest;
use TeamNifty\Forge\Requests\Monitors\OrganizationsServersMonitorsShowRequest;
use TeamNifty\Forge\Requests\Monitors\OrganizationsServersMonitorsStoreRequest;

class Monitors extends BaseResource
{
    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $monitor  The monitor ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersMonitorsDestroyRequest(string $organization, int $server, int $monitor): Response
    {
        return $this->connector->send(new OrganizationsServersMonitorsDestroyRequest($organization, $server, $monitor));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  null|string  $sort  Available sorts are `state`, `status`, `created_at`, `updated_at`. You can sort by multiple options by separating them with a comma. To sort in descending order, use `-` sign in front of the sort, for example: `-state`.
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     * @param  null|string  $filterstatus  The status of the monitor.
     * @param  null|string  $filterstate  The state of the monitor.
     * @param  null|string  $filtertype  The type of the monitor.
     * @param  null|string  $filternotify  The email address to notify when the monitor is in an alert state.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersMonitorsIndexRequest(
        string $organization,
        int $server,
        ?string $sort = null,
        ?int $pagesize = null,
        ?string $pagecursor = null,
        ?string $filterstatus = null,
        ?string $filterstate = null,
        ?string $filtertype = null,
        ?string $filternotify = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersMonitorsIndexRequest($organization, $server, $sort, $pagesize, $pagecursor, $filterstatus, $filterstate, $filtertype, $filternotify));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $monitor  The monitor ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersMonitorsShowRequest(string $organization, int $server, int $monitor): Response
    {
        return $this->connector->send(new OrganizationsServersMonitorsShowRequest($organization, $server, $monitor));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  float|int  $threshold  The threshold to alert on once breached.
     * @param  null|int  $minutes  The frequency in minutes to evaluate the monitor.
     * @param  string  $notify  The email address to notify when the monitor is in an alert state.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersMonitorsStoreRequest(
        string $organization,
        int $server,
        float|int $threshold,
        ?int $minutes,
        string $notify,
    ): Response {
        return $this->connector->send(new OrganizationsServersMonitorsStoreRequest($organization, $server, $threshold, $minutes, $notify));
    }
}
