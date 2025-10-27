<?php

namespace TeamNifty\Forge\Requests\ScheduledJobs;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * organizations.servers.scheduled-jobs.destroy
 *
 * Delete a specific scheduled job.
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersScheduledJobsDestroyRequest extends Request
{
    protected Method $method = Method::DELETE;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $job  The job ID
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $job,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/scheduled-jobs/{$this->job}";
    }
}
