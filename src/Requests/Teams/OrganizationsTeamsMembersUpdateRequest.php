<?php

namespace TeamNifty\Forge\Requests\Teams;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.teams.members.update
 *
 * Update the team member for the team.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationsTeamsMembersUpdateRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     * @param  int  $user  The user ID
     * @param  int  $roleId  The ID of the role to assign to the team member.
     */
    public function __construct(
        protected string $organization,
        protected int $team,
        protected int $user,
        protected int $roleId,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['role_id' => $this->roleId]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/teams/{$this->team}/members/{$this->user}";
    }
}
