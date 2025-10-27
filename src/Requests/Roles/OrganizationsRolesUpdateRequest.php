<?php

namespace TeamNifty\Forge\Requests\Roles;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.roles.update
 *
 * Update a role for the organization.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationsRolesUpdateRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $role  The role ID
     */
    public function __construct(
        protected string $organization,
        protected int $role,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/roles/{$this->role}";
    }
}
