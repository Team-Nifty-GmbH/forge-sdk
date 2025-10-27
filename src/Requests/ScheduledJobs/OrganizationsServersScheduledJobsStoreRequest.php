<?php

namespace TeamNifty\Forge\Requests\ScheduledJobs;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.scheduled-jobs.store
 *
 * Create a specific scheduled job.
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersScheduledJobsStoreRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  null|mixed  $name  The name of the command.
     * @param  string  $command  The command to run.
     * @param  string  $user  The user to run the scheduled job as.
     * @param  null|mixed  $cron  The cron expression to use for the scheduled job. Only used if frequency is set to Custom.
     * @param  null|mixed  $heartbeat  Whether a heartbeat should be created for the scheduled job.
     * @param  null|string  $gracePeriod  The grace period, in minutes, for the heartbeat.
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected mixed $name = null,
        protected string $command,
        protected string $user,
        protected mixed $cron = null,
        protected mixed $heartbeat = null,
        protected ?string $gracePeriod = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter([
            'name' => $this->name,
            'command' => $this->command,
            'user' => $this->user,
            'cron' => $this->cron,
            'heartbeat' => $this->heartbeat,
            'grace_period' => $this->gracePeriod,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/scheduled-jobs";
    }
}
