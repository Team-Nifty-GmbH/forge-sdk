<?php

namespace TeamNifty\Forge\Requests\Recipes;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use TeamNifty\Forge\Enums\CreateBackgroundProcessRequestUser;

/**
 * organizations.recipes.update
 *
 * Update a recipe in the organization.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationsRecipesUpdateRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $recipe  The recipe ID
     */
    public function __construct(
        protected string $organization,
        protected int $recipe,
        protected ?string $name = null,
        protected ?CreateBackgroundProcessRequestUser $user = null,
        protected ?string $script = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['name' => $this->name, 'user' => $this->user?->value, 'script' => $this->script]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/recipes/{$this->recipe}";
    }
}
