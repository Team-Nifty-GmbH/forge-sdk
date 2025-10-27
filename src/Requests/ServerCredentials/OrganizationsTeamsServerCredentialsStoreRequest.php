<?php

namespace TeamNifty\Forge\Requests\ServerCredentials;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.teams.server-credentials.store
 *
 * Share a server credential with a team.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationsTeamsServerCredentialsStoreRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     */
    public function __construct(
        protected string $organization,
        protected int $team,
        protected int $credentialId,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['credential_id' => $this->credentialId]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/teams/{$this->team}/server-credentials";
    }
}
