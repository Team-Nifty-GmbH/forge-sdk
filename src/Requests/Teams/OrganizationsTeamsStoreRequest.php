<?php

namespace TeamNifty\Forge\Requests\Teams;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.teams.store
 *
 * Create a new team for the organization.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationsTeamsStoreRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $organization  The organization slug
     */
    public function __construct(
        protected string $organization,
        protected string $name,
        protected ?array $users = null,
        protected ?array $invites = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['name' => $this->name, 'users' => $this->users, 'invites' => $this->invites]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/teams";
    }
}
