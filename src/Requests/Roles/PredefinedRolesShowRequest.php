<?php

namespace TeamNifty\Forge\Requests\Roles;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * predefined-roles.show
 *
 * Show a specific predefined role.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class PredefinedRolesShowRequest extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  int  $role  The role ID
     */
    public function __construct(
        protected int $role,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/predefined-roles/{$this->role}";
    }
}
