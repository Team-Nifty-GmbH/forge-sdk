<?php

namespace TeamNifty\Forge\Requests\Organizations;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.server-credentials.vpcs.store
 *
 * Create a private network for the provider.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationsServerCredentialsVpcsStoreRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $credential  The credential ID
     */
    public function __construct(
        protected string $organization,
        protected int $credential,
        protected string $region,
        protected string $name,
    ) {}

    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }

    public function defaultBody(): array
    {
        return array_filter(['name' => $this->name]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/server-credentials/{$this->credential}/regions/{$this->region}/vpcs";
    }
}
