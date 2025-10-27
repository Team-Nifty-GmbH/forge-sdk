<?php

namespace TeamNifty\Forge\Resource;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNifty\Forge\Enums\CreateBackgroundProcessRequestUser;
use TeamNifty\Forge\Requests\BackgroundProcesses\OrganizationsServersBackgroundProcessesDestroyRequest;
use TeamNifty\Forge\Requests\BackgroundProcesses\OrganizationsServersBackgroundProcessesIndexRequest;
use TeamNifty\Forge\Requests\BackgroundProcesses\OrganizationsServersBackgroundProcessesLogShowRequest;
use TeamNifty\Forge\Requests\BackgroundProcesses\OrganizationsServersBackgroundProcessesShowRequest;
use TeamNifty\Forge\Requests\BackgroundProcesses\OrganizationsServersBackgroundProcessesStoreRequest;
use TeamNifty\Forge\Requests\BackgroundProcesses\OrganizationsServersBackgroundProcessesUpdateRequest;

class BackgroundProcesses extends BaseResource
{
    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $backgroundProcess  The background process ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersBackgroundProcessesDestroyRequest(
        string $organization,
        int $server,
        int $backgroundProcess,
    ): Response {
        return $this->connector->send(new OrganizationsServersBackgroundProcessesDestroyRequest($organization, $server, $backgroundProcess));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  null|string  $sort  Available sorts are `user`. You can sort by multiple options by separating them with a comma. To sort in descending order, use `-` sign in front of the sort, for example: `-user`.
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     * @param  null|string  $filteruser  The user that the process is running as.
     * @param  null|string  $filtersiteId  The site ID that the process is running for.
     * @param  null|string  $filterdirectory  The directory that the process is running in.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersBackgroundProcessesIndexRequest(
        string $organization,
        int $server,
        ?string $sort = null,
        ?int $pagesize = null,
        ?string $pagecursor = null,
        ?string $filteruser = null,
        ?string $filtersiteId = null,
        ?string $filterdirectory = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersBackgroundProcessesIndexRequest($organization, $server, $sort, $pagesize, $pagecursor, $filteruser, $filtersiteId, $filterdirectory));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $backgroundProcess  The background process ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersBackgroundProcessesLogShowRequest(
        string $organization,
        int $server,
        int $backgroundProcess,
    ): Response {
        return $this->connector->send(new OrganizationsServersBackgroundProcessesLogShowRequest($organization, $server, $backgroundProcess));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $backgroundProcess  The background process ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersBackgroundProcessesShowRequest(
        string $organization,
        int $server,
        int $backgroundProcess,
    ): Response {
        return $this->connector->send(new OrganizationsServersBackgroundProcessesShowRequest($organization, $server, $backgroundProcess));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  string  $name  The name of the background process.
     * @param  string  $command  The command to run.
     * @param  CreateBackgroundProcessRequestUser  $user  The user to run the background process as.
     * @param  null|mixed  $directory  The directory to run the background process from.
     * @param  int  $processes  The number of processes to run.
     * @param  null|int  $startsecs  The number of seconds to wait before starting the process.
     * @param  null|int  $stopwaitsecs  The number of seconds to wait before stopping the process.
     * @param  null|mixed  $stopsignal  The signal to send to stop the process.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersBackgroundProcessesStoreRequest(
        string $organization,
        int $server,
        string $name,
        string $command,
        CreateBackgroundProcessRequestUser $user,
        mixed $directory = null,
        int $processes,
        ?int $startsecs = null,
        ?int $stopwaitsecs = null,
        mixed $stopsignal = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersBackgroundProcessesStoreRequest($organization, $server, $name, $command, $user, $directory, $processes, $startsecs, $stopwaitsecs, $stopsignal));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $backgroundProcess  The background process ID
     * @param  string  $name  The name of the background process.
     * @param  null|string  $config  The supervisor configuration of the background process.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersBackgroundProcessesUpdateRequest(
        string $organization,
        int $server,
        int $backgroundProcess,
        string $name,
        ?string $config = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersBackgroundProcessesUpdateRequest($organization, $server, $backgroundProcess, $name, $config));
    }
}
