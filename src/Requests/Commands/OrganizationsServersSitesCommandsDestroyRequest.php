<?php

namespace TeamNifty\Forge\Requests\Commands;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * organizations.servers.sites.commands.destroy
 *
 * Delete a command history.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationsServersSitesCommandsDestroyRequest extends Request
{
    protected Method $method = Method::DELETE;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $command  The command ID
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $site,
        protected int $command,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/sites/{$this->site}/commands/{$this->command}";
    }
}
