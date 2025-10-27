<?php

namespace TeamNifty\Forge\Requests\Commands;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.sites.commands.store
 *
 * Run a command on the site.
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersSitesCommandsStoreRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  string  $command  The command to run.
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $site,
        protected string $command,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['command' => $this->command]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/sites/{$this->site}/commands";
    }
}
