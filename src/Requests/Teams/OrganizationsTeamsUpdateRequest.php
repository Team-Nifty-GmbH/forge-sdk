<?php

namespace TeamNifty\Forge\Requests\Teams;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.teams.update
 *
 * Update a team for the organization.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationsTeamsUpdateRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     */
    public function __construct(
        protected string $organization,
        protected int $team,
        protected string $name,
        protected ?array $users = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['name' => $this->name, 'users' => $this->users]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/teams/{$this->team}";
    }
}
