<?php

namespace TeamNifty\Forge\Requests\Recipes;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.recipes.runs.store
 *
 * Run a given recipe on a list of servers.
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsRecipesRunsStoreRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $recipe  The recipe ID
     * @param  null|bool  $email  Whether to send an email notification when the recipe has completed.
     * @param  array  $servers  The servers on which to run the recipe on.
     */
    public function __construct(
        protected string $organization,
        protected int $recipe,
        protected ?bool $email,
        protected array $servers,
    ) {}

    public function defaultBody(): array
    {
        return array_filter(['email' => $this->email, 'servers' => $this->servers]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/recipes/{$this->recipe}/runs";
    }
}
