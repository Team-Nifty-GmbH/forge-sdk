<?php

namespace TeamNifty\Forge\Requests\Integrations;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.sites.integrations.laravel-maintenance.store
 *
 * Enable maintenance mode for the site.
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersSitesIntegrationsLaravelMaintenanceStoreRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  null|mixed  $secret  The secret phrase that allows access to the application while in maintenance mode.
     * @param  null|mixed  $redirect  The redirect URL to which all requests should be sent while in maintenance mode.
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $site,
        protected mixed $secret = null,
        protected mixed $redirect = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['secret' => $this->secret, 'redirect' => $this->redirect]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/sites/{$this->site}/integrations/laravel-maintenance";
    }
}
