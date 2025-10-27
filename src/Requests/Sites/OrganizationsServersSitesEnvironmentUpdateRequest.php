<?php

namespace TeamNifty\Forge\Requests\Sites;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.sites.environment.update
 *
 *
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersSitesEnvironmentUpdateRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $site,
        protected string $environment,
        protected ?bool $cache = null,
        protected ?bool $queues = null,
        protected mixed $encryptionKey = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter([
            'environment' => $this->environment,
            'cache' => $this->cache,
            'queues' => $this->queues,
            'encryption_key' => $this->encryptionKey,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/sites/{$this->site}/environment";
    }
}
