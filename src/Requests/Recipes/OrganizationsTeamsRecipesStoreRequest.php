<?php

namespace TeamNifty\Forge\Requests\Recipes;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.teams.recipes.store
 *
 * Shares a recipe with a team.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationsTeamsRecipesStoreRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     * @param  int  $recipeId  The ID of the recipe to share with the team.
     */
    public function __construct(
        protected string $organization,
        protected int $team,
        protected int $recipeId,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['recipe_id' => $this->recipeId]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/teams/{$this->team}/recipes";
    }
}
