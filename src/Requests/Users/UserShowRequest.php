<?php

namespace TeamNifty\Forge\Requests\Users;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * user.show
 *
 * Show the authenticated user.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class UserShowRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct() {}

    public function resolveEndpoint(): string
    {
        return '/user';
    }
}
