<?php

namespace TeamNifty\Forge\Requests\Sites;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.sites.composer.credentials.update
 *
 *
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersSitesComposerCredentialsUpdateRequest extends Request implements HasBody
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
        protected string $repository,
        protected string $username,
        protected string $password,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['repository' => $this->repository, 'username' => $this->username, 'password' => $this->password]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/sites/{$this->site}/composer/credentials/{$this->repository}";
    }
}
