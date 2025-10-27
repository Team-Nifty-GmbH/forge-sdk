<?php

namespace TeamNifty\Forge\Requests\Teams;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * organizations.teams.members.show
 *
 * Show the team member for the team.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationsTeamsMembersShowRequest extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     * @param  int  $user  The user ID
     */
    public function __construct(
        protected string $organization,
        protected int $team,
        protected int $user,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/teams/{$this->team}/members/{$this->user}";
    }
}
