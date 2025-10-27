<?php

namespace TeamNifty\Forge\Requests\Servers;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use TeamNifty\Forge\Enums\UpdatePhpCliVersionRequestPhpVersion;

/**
 * organizations.servers.php.cli-version.update
 *
 * Update the PHP CLI version for the server.
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersPhpCliVersionUpdateRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  UpdatePhpCliVersionRequestPhpVersion  $phpVersion  The PHP version to update the CLI to.
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected UpdatePhpCliVersionRequestPhpVersion $phpVersion,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['php_version' => $this->phpVersion->value]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/php/cli-version";
    }
}
