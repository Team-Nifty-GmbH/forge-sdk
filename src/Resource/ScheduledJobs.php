<?php

namespace TeamNifty\Forge\Resource;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNifty\Forge\Requests\ScheduledJobs\OrganizationsServersScheduledJobsDestroyRequest;
use TeamNifty\Forge\Requests\ScheduledJobs\OrganizationsServersScheduledJobsIndexRequest;
use TeamNifty\Forge\Requests\ScheduledJobs\OrganizationsServersScheduledJobsOutputsShowRequest;
use TeamNifty\Forge\Requests\ScheduledJobs\OrganizationsServersScheduledJobsShowRequest;
use TeamNifty\Forge\Requests\ScheduledJobs\OrganizationsServersScheduledJobsStoreRequest;

class ScheduledJobs extends BaseResource
{
    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $job  The job ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersScheduledJobsDestroyRequest(
        string $organization,
        int $server,
        int $job,
    ): Response {
        return $this->connector->send(new OrganizationsServersScheduledJobsDestroyRequest($organization, $server, $job));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  null|string  $sort  Available sorts are `created_at`, `updated_at`, `status`. You can sort by multiple options by separating them with a comma. To sort in descending order, use `-` sign in front of the sort, for example: `-created_at`.
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersScheduledJobsIndexRequest(
        string $organization,
        int $server,
        ?string $sort = null,
        ?int $pagesize = null,
        ?string $pagecursor = null,
        ?string $filterstatus = null,
        ?string $filteruser = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersScheduledJobsIndexRequest($organization, $server, $sort, $pagesize, $pagecursor, $filterstatus, $filteruser));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $job  The job ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersScheduledJobsOutputsShowRequest(
        string $organization,
        int $server,
        int $job,
    ): Response {
        return $this->connector->send(new OrganizationsServersScheduledJobsOutputsShowRequest($organization, $server, $job));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $job  The job ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersScheduledJobsShowRequest(string $organization, int $server, int $job): Response
    {
        return $this->connector->send(new OrganizationsServersScheduledJobsShowRequest($organization, $server, $job));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  null|mixed  $name  The name of the command.
     * @param  string  $command  The command to run.
     * @param  string  $user  The user to run the scheduled job as.
     * @param  null|mixed  $cron  The cron expression to use for the scheduled job. Only used if frequency is set to Custom.
     * @param  null|mixed  $heartbeat  Whether a heartbeat should be created for the scheduled job.
     * @param  null|string  $gracePeriod  The grace period, in minutes, for the heartbeat.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersScheduledJobsStoreRequest(
        string $organization,
        int $server,
        mixed $name = null,
        string $command,
        string $user,
        mixed $cron = null,
        mixed $heartbeat = null,
        ?string $gracePeriod = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersScheduledJobsStoreRequest($organization, $server, $name, $command, $user, $cron, $heartbeat, $gracePeriod));
    }
}
