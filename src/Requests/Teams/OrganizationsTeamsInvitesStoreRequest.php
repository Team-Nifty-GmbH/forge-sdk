<?php

namespace TeamNifty\Forge\Requests\Teams;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.teams.invites.store
 *
 * Invite a new member to the team.
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsTeamsInvitesStoreRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     */
    public function __construct(
        protected string $organization,
        protected int $team,
        protected int $roleId,
        protected string $email,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['role_id' => $this->roleId, 'email' => $this->email]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/teams/{$this->team}/invites";
    }
}
