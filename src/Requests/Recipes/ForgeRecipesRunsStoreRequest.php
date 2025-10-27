<?php

namespace TeamNifty\Forge\Requests\Recipes;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * forge-recipes.runs.store
 *
 * Run a Forge recipe on specified servers.
 *
 * Processing mode: <small><code>async</code></small>
 */
class ForgeRecipesRunsStoreRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  int  $forgeRecipe  The forge recipe ID
     * @param  null|bool  $email  Whether to send an email notification when the recipe has completed.
     * @param  array  $servers  The servers on which to run the recipe on.
     */
    public function __construct(
        protected int $forgeRecipe,
        protected ?bool $email,
        protected array $servers,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['email' => $this->email, 'servers' => $this->servers]);
    }

    public function resolveEndpoint(): string
    {
        return "/forge-recipes/{$this->forgeRecipe}/runs";
    }
}
