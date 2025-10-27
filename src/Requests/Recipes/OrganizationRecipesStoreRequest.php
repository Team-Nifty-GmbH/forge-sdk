<?php

namespace TeamNifty\Forge\Requests\Recipes;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use TeamNifty\Forge\Enums\CreateBackgroundProcessRequestUser;

/**
 * organization.recipes.store
 *
 * Create a new recipe for the organization.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationRecipesStoreRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $organization  The organization slug
     */
    public function __construct(
        protected string $organization,
        protected string $name,
        protected CreateBackgroundProcessRequestUser $user,
        protected string $script,
        protected ?string $teamId = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['name' => $this->name, 'user' => $this->user->value, 'script' => $this->script, 'team_id' => $this->teamId]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/recipes";
    }
}
