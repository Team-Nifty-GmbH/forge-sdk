<?php

namespace TeamNifty\Forge\Requests\Servers;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.teams.servers.store
 *
 * Share a server with a team.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationsTeamsServersStoreRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     * @param  int  $serverId  The server ID
     */
    public function __construct(
        protected string $organization,
        protected int $team,
        protected int $serverId,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['server_id' => $this->serverId]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/teams/{$this->team}/servers";
    }
}
