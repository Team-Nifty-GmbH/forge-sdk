<?php

namespace TeamNifty\Forge\Requests\BackgroundProcesses;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.background-processes.update
 *
 * Update the supervisor configuration for a background process.
 *
 * Processing mode:
 * <small><code>async</code></small>
 */
class OrganizationsServersBackgroundProcessesUpdateRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $backgroundProcess  The background process ID
     * @param  string  $name  The name of the background process.
     * @param  null|string  $supervisorConfig  The supervisor configuration of the background process.
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $backgroundProcess,
        protected string $name,
        protected ?string $supervisorConfig = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['name' => $this->name, 'config' => $this->supervisorConfig]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/background-processes/{$this->backgroundProcess}";
    }
}
