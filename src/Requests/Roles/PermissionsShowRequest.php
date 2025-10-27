<?php

namespace TeamNifty\Forge\Requests\Roles;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * permissions.show
 *
 * Show a specific permission.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class PermissionsShowRequest extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  int  $permission  The permission ID
     */
    public function __construct(
        protected int $permission,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/permissions/{$this->permission}";
    }
}
