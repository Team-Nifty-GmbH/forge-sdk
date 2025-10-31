<?php

namespace TeamNifty\Forge\Requests\BackgroundProcesses;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use TeamNifty\Forge\Enums\CreateBackgroundProcessRequestUser;

/**
 * organizations.servers.background-processes.store
 *
 * Create a new background process from a template.
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersBackgroundProcessesStoreRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  string  $name  The name of the background process.
     * @param  string  $command  The command to run.
     * @param  CreateBackgroundProcessRequestUser  $user  The user to run the background process as.
     * @param  int  $processes  The number of processes to run.
     * @param  null|mixed  $directory  The directory to run the background process from.
     * @param  null|int  $startsecs  The number of seconds to wait before starting the process.
     * @param  null|int  $stopwaitsecs  The number of seconds to wait before stopping the process.
     * @param  null|mixed  $stopsignal  The signal to send to stop the process.
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected string $name,
        protected string $command,
        protected CreateBackgroundProcessRequestUser $user,
        protected int $processes,
        protected mixed $directory = null,
        protected ?int $startsecs = null,
        protected ?int $stopwaitsecs = null,
        protected mixed $stopsignal = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter([
            'name' => $this->name,
            'command' => $this->command,
            'user' => $this->user->value,
            'directory' => $this->directory,
            'processes' => $this->processes,
            'startsecs' => $this->startsecs,
            'stopwaitsecs' => $this->stopwaitsecs,
            'stopsignal' => $this->stopsignal,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/background-processes";
    }
}
