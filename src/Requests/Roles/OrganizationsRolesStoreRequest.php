<?php

namespace TeamNifty\Forge\Requests\Roles;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.roles.store
 *
 * Create a new role for the organization.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationsRolesStoreRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $organization  The organization slug
     */
    public function __construct(
        protected string $organization,
        protected string $name,
        protected ?array $permissions = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['name' => $this->name, 'permissions' => $this->permissions]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/roles";
    }
}
