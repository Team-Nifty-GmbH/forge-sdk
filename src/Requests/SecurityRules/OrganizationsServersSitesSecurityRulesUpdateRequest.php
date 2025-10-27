<?php

namespace TeamNifty\Forge\Requests\SecurityRules;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.sites.security-rules.update
 *
 * Update an existing security rule for a site.
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersSitesSecurityRulesUpdateRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $securityRule  The security rule ID
     * @param  string  $name  The name of the security rule.
     * @param  null|mixed  $path  The path for the security rule.
     * @param  array  $credentials  The credentials for the security rule.
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $site,
        protected int $securityRule,
        protected string $name,
        protected mixed $path = null,
        protected array $credentials,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['name' => $this->name, 'path' => $this->path, 'credentials' => $this->credentials]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/sites/{$this->site}/security-rules/{$this->securityRule}";
    }
}
