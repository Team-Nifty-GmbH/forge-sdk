<?php

namespace TeamNifty\Forge\Requests\Servers;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.php.versions.store
 *
 * Install a new PHP version on the server
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersPhpVersionsStoreRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected ?bool $cliDefault = null,
        protected ?bool $siteDefault = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['cli_default' => $this->cliDefault, 'site_default' => $this->siteDefault]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/php/versions";
    }
}
