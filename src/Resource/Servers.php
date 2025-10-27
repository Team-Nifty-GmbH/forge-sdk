<?php

namespace TeamNifty\Forge\Resource;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNifty\Forge\Enums\UpdatePhpCliVersionRequestPhpVersion;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersActionsStoreRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersArchivesDestroyRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersArchivesIndexRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersArchivesStoreRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersBackgroundProcessesActionsStoreRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersDestroyRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersEventsIndexRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersEventsOutputShowRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersEventsShowRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersIndexRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpCliVersionShowRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpCliVersionUpdateRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpMaxExecutionTimeShowRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpMaxExecutionTimeUpdateRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpMaxUploadSizeShowRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpMaxUploadSizeUpdateRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpOpcacheDestroyRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpOpcacheShowRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpOpcacheStoreRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpSiteVersionShowRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpSiteVersionUpdateRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpVersionsConfigsCliShowRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpVersionsConfigsCliUpdateRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpVersionsConfigsFpmShowRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpVersionsConfigsFpmUpdateRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpVersionsConfigsPoolShowRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpVersionsConfigsPoolUpdateRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpVersionsDestroyRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpVersionsIndexRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpVersionsShowRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpVersionsStoreRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpVersionsUpdateRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersServicesMysqlActionsStoreRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersServicesNginxActionsStoreRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersServicesPhpActionsStoreRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersServicesPostgresActionsStoreRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersServicesRedisActionsStoreRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersServicesSupervisorActionsStoreRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersShowRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersStoreRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsTeamsServersDestroyRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsTeamsServersIndexRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsTeamsServersStoreRequest;

class Servers extends BaseResource
{
    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersActionsStoreRequest(string $organization, int $server): Response
    {
        return $this->connector->send(new OrganizationsServersActionsStoreRequest($organization, $server));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersArchivesDestroyRequest(string $organization, int $server): Response
    {
        return $this->connector->send(new OrganizationsServersArchivesDestroyRequest($organization, $server));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  null|string  $sort  Available sorts are `created_at`, `updated_at`. You can sort by multiple options by separating them with a comma. To sort in descending order, use `-` sign in front of the sort, for example: `-created_at`.
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersArchivesIndexRequest(
        string $organization,
        ?string $sort = null,
        ?int $pagesize = null,
        ?string $pagecursor = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersArchivesIndexRequest($organization, $sort, $pagesize, $pagecursor));
    }

    /**
     * @param  string  $organization  The organization slug
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersArchivesStoreRequest(string $organization, int $serverId): Response
    {
        return $this->connector->send(new OrganizationsServersArchivesStoreRequest($organization, $serverId));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $backgroundProcess  The background process ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersBackgroundProcessesActionsStoreRequest(
        string $organization,
        int $server,
        int $backgroundProcess,
    ): Response {
        return $this->connector->send(new OrganizationsServersBackgroundProcessesActionsStoreRequest($organization, $server, $backgroundProcess));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersDestroyRequest(string $organization, int $server): Response
    {
        return $this->connector->send(new OrganizationsServersDestroyRequest($organization, $server));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  null|string  $sort  Available sorts are `created_at`, `updated_at`. You can sort by multiple options by separating them with a comma. To sort in descending order, use `-` sign in front of the sort, for example: `-created_at`.
     * @param  null|string  $include  Available includes are `initiator`, `initiatorCount`, `initiatorExists`. You can include multiple options by separating them with a comma.
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     * @param  null|string  $filterinitiatedBy  The user ID of the event initiator.
     * @param  null|string  $filterranAs  The server user that the event was run as.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersEventsIndexRequest(
        string $organization,
        int $server,
        ?string $sort = null,
        ?string $include = null,
        ?int $pagesize = null,
        ?string $pagecursor = null,
        ?string $filterinitiatedBy = null,
        ?string $filterranAs = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersEventsIndexRequest($organization, $server, $sort, $include, $pagesize, $pagecursor, $filterinitiatedBy, $filterranAs));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $event  The event ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersEventsOutputShowRequest(string $organization, int $server, int $event): Response
    {
        return $this->connector->send(new OrganizationsServersEventsOutputShowRequest($organization, $server, $event));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $event  The event ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersEventsShowRequest(string $organization, int $server, int $event): Response
    {
        return $this->connector->send(new OrganizationsServersEventsShowRequest($organization, $server, $event));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  null|string  $sort  Available sorts are `name`, `provider`, `ubuntu_version`, `region`, `php_version`, `created_at`, `updated_at`. You can sort by multiple options by separating them with a comma. To sort in descending order, use `-` sign in front of the sort, for example: `-name`.
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     * @param  null|string  $filteripAddress  The IP address of the server.
     * @param  null|string  $filtername  The name of the server.
     * @param  null|string  $filterregion  The region where the server is located.
     * @param  null|string  $filtersize  The size of the server.
     * @param  null|string  $filterprovider  The provider of the server.
     * @param  null|string  $filterubuntuVersion  The Ubuntu version of the server.
     * @param  null|string  $filterphpVersion  The PHP version of the server.
     * @param  null|string  $filterdatabaseType  The database type of the server.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersIndexRequest(
        string $organization,
        ?string $sort = null,
        ?int $pagesize = null,
        ?string $pagecursor = null,
        ?string $filteripAddress = null,
        ?string $filtername = null,
        ?string $filterregion = null,
        ?string $filtersize = null,
        ?string $filterprovider = null,
        ?string $filterubuntuVersion = null,
        ?string $filterphpVersion = null,
        ?string $filterdatabaseType = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersIndexRequest($organization, $sort, $pagesize, $pagecursor, $filteripAddress, $filtername, $filterregion, $filtersize, $filterprovider, $filterubuntuVersion, $filterphpVersion, $filterdatabaseType));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersPhpCliVersionShowRequest(string $organization, int $server): Response
    {
        return $this->connector->send(new OrganizationsServersPhpCliVersionShowRequest($organization, $server));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  UpdatePhpCliVersionRequestPhpVersion  $phpVersion  The PHP version to update the CLI to.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersPhpCliVersionUpdateRequest(
        string $organization,
        int $server,
        UpdatePhpCliVersionRequestPhpVersion $phpVersion,
    ): Response {
        return $this->connector->send(new OrganizationsServersPhpCliVersionUpdateRequest($organization, $server, $phpVersion));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersPhpMaxExecutionTimeShowRequest(string $organization, int $server): Response
    {
        return $this->connector->send(new OrganizationsServersPhpMaxExecutionTimeShowRequest($organization, $server));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersPhpMaxExecutionTimeUpdateRequest(
        string $organization,
        int $server,
        mixed $maxUploadSize = null,
        mixed $maxExecutionTime = null,
        mixed $opcache = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersPhpMaxExecutionTimeUpdateRequest($organization, $server, $maxUploadSize, $maxExecutionTime, $opcache));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersPhpMaxUploadSizeShowRequest(string $organization, int $server): Response
    {
        return $this->connector->send(new OrganizationsServersPhpMaxUploadSizeShowRequest($organization, $server));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersPhpMaxUploadSizeUpdateRequest(
        string $organization,
        int $server,
        mixed $maxUploadSize = null,
        mixed $maxExecutionTime = null,
        mixed $opcache = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersPhpMaxUploadSizeUpdateRequest($organization, $server, $maxUploadSize, $maxExecutionTime, $opcache));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersPhpOpcacheDestroyRequest(string $organization, int $server): Response
    {
        return $this->connector->send(new OrganizationsServersPhpOpcacheDestroyRequest($organization, $server));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersPhpOpcacheShowRequest(string $organization, int $server): Response
    {
        return $this->connector->send(new OrganizationsServersPhpOpcacheShowRequest($organization, $server));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersPhpOpcacheStoreRequest(string $organization, int $server): Response
    {
        return $this->connector->send(new OrganizationsServersPhpOpcacheStoreRequest($organization, $server));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersPhpSiteVersionShowRequest(string $organization, int $server): Response
    {
        return $this->connector->send(new OrganizationsServersPhpSiteVersionShowRequest($organization, $server));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  UpdatePhpCliVersionRequestPhpVersion  $phpVersion  The PHP version to update the CLI to.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersPhpSiteVersionUpdateRequest(
        string $organization,
        int $server,
        UpdatePhpCliVersionRequestPhpVersion $phpVersion,
    ): Response {
        return $this->connector->send(new OrganizationsServersPhpSiteVersionUpdateRequest($organization, $server, $phpVersion));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $phpVersion  The php version ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersPhpVersionsConfigsCliShowRequest(
        string $organization,
        int $server,
        int $phpVersion,
    ): Response {
        return $this->connector->send(new OrganizationsServersPhpVersionsConfigsCliShowRequest($organization, $server, $phpVersion));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $phpVersion  The php version ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersPhpVersionsConfigsCliUpdateRequest(
        string $organization,
        int $server,
        int $phpVersion,
        string $config,
    ): Response {
        return $this->connector->send(new OrganizationsServersPhpVersionsConfigsCliUpdateRequest($organization, $server, $phpVersion, $config));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $phpVersion  The php version ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersPhpVersionsConfigsFpmShowRequest(
        string $organization,
        int $server,
        int $phpVersion,
    ): Response {
        return $this->connector->send(new OrganizationsServersPhpVersionsConfigsFpmShowRequest($organization, $server, $phpVersion));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $phpVersion  The php version ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersPhpVersionsConfigsFpmUpdateRequest(
        string $organization,
        int $server,
        int $phpVersion,
        string $config,
    ): Response {
        return $this->connector->send(new OrganizationsServersPhpVersionsConfigsFpmUpdateRequest($organization, $server, $phpVersion, $config));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $phpVersion  The php version ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersPhpVersionsConfigsPoolShowRequest(
        string $organization,
        int $server,
        int $phpVersion,
        ?string $user = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersPhpVersionsConfigsPoolShowRequest($organization, $server, $phpVersion, $user));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $phpVersion  The php version ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersPhpVersionsConfigsPoolUpdateRequest(
        string $organization,
        int $server,
        int $phpVersion,
        string $config,
        mixed $user = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersPhpVersionsConfigsPoolUpdateRequest($organization, $server, $phpVersion, $config, $user));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $phpVersion  The php version ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersPhpVersionsDestroyRequest(
        string $organization,
        int $server,
        int $phpVersion,
    ): Response {
        return $this->connector->send(new OrganizationsServersPhpVersionsDestroyRequest($organization, $server, $phpVersion));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  null|string  $sort  Available sorts are `created_at`, `updated_at`, `status`, `version`. You can sort by multiple options by separating them with a comma. To sort in descending order, use `-` sign in front of the sort, for example: `-created_at`.
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersPhpVersionsIndexRequest(
        string $organization,
        int $server,
        ?string $sort = null,
        ?int $pagesize = null,
        ?string $pagecursor = null,
        ?string $filterstatus = null,
        ?string $filterversion = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersPhpVersionsIndexRequest($organization, $server, $sort, $pagesize, $pagecursor, $filterstatus, $filterversion));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $phpVersion  The php version ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersPhpVersionsShowRequest(
        string $organization,
        int $server,
        int $phpVersion,
    ): Response {
        return $this->connector->send(new OrganizationsServersPhpVersionsShowRequest($organization, $server, $phpVersion));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersPhpVersionsStoreRequest(
        string $organization,
        int $server,
        ?bool $cliDefault = null,
        ?bool $siteDefault = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersPhpVersionsStoreRequest($organization, $server, $cliDefault, $siteDefault));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $phpVersion  The php version ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersPhpVersionsUpdateRequest(
        string $organization,
        int $server,
        int $phpVersion,
    ): Response {
        return $this->connector->send(new OrganizationsServersPhpVersionsUpdateRequest($organization, $server, $phpVersion));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersServicesMysqlActionsStoreRequest(string $organization, int $server): Response
    {
        return $this->connector->send(new OrganizationsServersServicesMysqlActionsStoreRequest($organization, $server));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersServicesNginxActionsStoreRequest(string $organization, int $server): Response
    {
        return $this->connector->send(new OrganizationsServersServicesNginxActionsStoreRequest($organization, $server));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersServicesPhpActionsStoreRequest(string $organization, int $server): Response
    {
        return $this->connector->send(new OrganizationsServersServicesPhpActionsStoreRequest($organization, $server));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersServicesPostgresActionsStoreRequest(string $organization, int $server): Response
    {
        return $this->connector->send(new OrganizationsServersServicesPostgresActionsStoreRequest($organization, $server));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersServicesRedisActionsStoreRequest(string $organization, int $server): Response
    {
        return $this->connector->send(new OrganizationsServersServicesRedisActionsStoreRequest($organization, $server));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersServicesSupervisorActionsStoreRequest(
        string $organization,
        int $server,
    ): Response {
        return $this->connector->send(new OrganizationsServersServicesSupervisorActionsStoreRequest($organization, $server));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersShowRequest(string $organization, int $server): Response
    {
        return $this->connector->send(new OrganizationsServersShowRequest($organization, $server));
    }

    /**
     * @param  string  $organization  The organization slug
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersStoreRequest(string $organization): Response
    {
        return $this->connector->send(new OrganizationsServersStoreRequest($organization));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsTeamsServersDestroyRequest(string $organization, int $team, int $server): Response
    {
        return $this->connector->send(new OrganizationsTeamsServersDestroyRequest($organization, $team, $server));
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
    public function organizationsTeamsServersIndexRequest(
        string $organization,
        int $team,
        ?int $pagesize = null,
        ?string $pagecursor = null,
    ): Response {
        return $this->connector->send(new OrganizationsTeamsServersIndexRequest($organization, $team, $pagesize, $pagecursor));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     * @param  int  $serverId  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsTeamsServersStoreRequest(string $organization, int $team, int $serverId): Response
    {
        return $this->connector->send(new OrganizationsTeamsServersStoreRequest($organization, $team, $serverId));
    }
}
