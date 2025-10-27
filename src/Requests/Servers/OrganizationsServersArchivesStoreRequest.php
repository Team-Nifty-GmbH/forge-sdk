<?php

namespace TeamNifty\Forge\Requests\Servers;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.archives.store
 *
 * Archive a server.
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersArchivesStoreRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $organization  The organization slug
     */
    public function __construct(
        protected string $organization,
        protected int $serverId,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['server_id' => $this->serverId]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/archives";
    }
}
