<?php

namespace TeamNifty\Forge\Requests\Roles;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * organizations.roles.destroy
 *
 * Delete a role from the organization.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationsRolesDestroyRequest extends Request
{
    protected Method $method = Method::DELETE;

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
