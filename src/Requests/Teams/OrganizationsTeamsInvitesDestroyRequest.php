<?php

namespace TeamNifty\Forge\Requests\Teams;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * organizations.teams.invites.destroy
 *
 * Cancel a pending invitation for the team.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationsTeamsInvitesDestroyRequest extends Request
{
    protected Method $method = Method::DELETE;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     * @param  int  $invitation  The invitation ID
     */
    public function __construct(
        protected string $organization,
        protected int $team,
        protected int $invitation,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/teams/{$this->team}/invites/{$this->invitation}";
    }
}
