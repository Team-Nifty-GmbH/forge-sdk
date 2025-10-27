<?php

namespace TeamNifty\Forge\Requests\Nginx;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.nginx.templates.update
 *
 * Update the specified nginx template on the server.
 *
 * Processing mode:
 * <small><code>sync</code></small>
 */
class OrganizationsServersNginxTemplatesUpdateRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $nginxTemplate  The nginx template ID
     * @param  string  $name  The name of the nginx template.
     * @param  string  $content  The content of the nginx template.
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $nginxTemplate,
        protected string $name,
        protected string $content,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['name' => $this->name, 'content' => $this->content]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/nginx/templates/{$this->nginxTemplate}";
    }
}
