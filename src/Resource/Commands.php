<?php

namespace TeamNifty\Forge\Resource;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNifty\Forge\Requests\Commands\OrganizationsServersSitesCommandsDestroyRequest;
use TeamNifty\Forge\Requests\Commands\OrganizationsServersSitesCommandsIndexRequest;
use TeamNifty\Forge\Requests\Commands\OrganizationsServersSitesCommandsShowRequest;
use TeamNifty\Forge\Requests\Commands\OrganizationsServersSitesCommandsStoreRequest;

class Commands extends BaseResource
{
    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $command  The command ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesCommandsDestroyRequest(
        string $organization,
        int $server,
        int $site,
        int $command,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesCommandsDestroyRequest($organization, $server, $site, $command));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  null|string  $sort  Available sorts are `status`, `created_at`, `updated_at`. You can sort by multiple options by separating them with a comma. To sort in descending order, use `-` sign in front of the sort, for example: `-status`.
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     * @param  null|string  $filteruserId  The user ID of the command initiator.
     * @param  null|string  $filterstatus  The status of the command.
     * @param  null|string  $filtercommand  The command it ran.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesCommandsIndexRequest(
        string $organization,
        int $server,
        int $site,
        ?string $sort = null,
        ?int $pagesize = null,
        ?string $pagecursor = null,
        ?string $filteruserId = null,
        ?string $filterstatus = null,
        ?string $filtercommand = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesCommandsIndexRequest($organization, $server, $site, $sort, $pagesize, $pagecursor, $filteruserId, $filterstatus, $filtercommand));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $command  The command ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesCommandsShowRequest(
        string $organization,
        int $server,
        int $site,
        int $command,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesCommandsShowRequest($organization, $server, $site, $command));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  string  $command  The command to run.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesCommandsStoreRequest(
        string $organization,
        int $server,
        int $site,
        string $command,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesCommandsStoreRequest($organization, $server, $site, $command));
    }
}
