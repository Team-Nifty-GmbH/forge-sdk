<?php

namespace TeamNifty\Forge\Requests\Recipes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * forge-recipes.show
 *
 * Show the Forge recipe.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class ForgeRecipesShowRequest extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  int  $forgeRecipe  The forge recipe ID
     */
    public function __construct(
        protected int $forgeRecipe,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/forge-recipes/{$this->forgeRecipe}";
    }
}
