<?php

namespace TeamNifty\Forge\Requests\Servers;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.php.max-execution-time.update
 *
 *
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersPhpMaxExecutionTimeUpdateRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected mixed $maxUploadSize = null,
        protected mixed $maxExecutionTime = null,
        protected mixed $opcache = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter([
            'max_upload_size' => $this->maxUploadSize,
            'max_execution_time' => $this->maxExecutionTime,
            'opcache' => $this->opcache,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/php/max-execution-time";
    }
}
