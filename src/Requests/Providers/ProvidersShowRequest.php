<?php

namespace TeamNifty\Forge\Requests\Providers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * providers.show
 *
 * Show the provider.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class ProvidersShowRequest extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  int  $provider  The provider ID
     */
    public function __construct(
        protected int $provider,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/providers/{$this->provider}";
    }
}
