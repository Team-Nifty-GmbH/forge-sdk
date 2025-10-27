<?php

namespace TeamNifty\Forge\Requests\Teams;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * organizations.teams.destroy
 *
 * Delete a team for the organization.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationsTeamsDestroyRequest extends Request
{
    protected Method $method = Method::DELETE;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     */
    public function __construct(
        protected string $organization,
        protected int $team,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/teams/{$this->team}";
    }
}
