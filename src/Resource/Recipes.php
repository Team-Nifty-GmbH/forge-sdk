<?php

namespace TeamNifty\Forge\Resource;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNifty\Forge\Enums\CreateBackgroundProcessRequestUser;
use TeamNifty\Forge\Requests\Recipes\ForgeRecipesIndexRequest;
use TeamNifty\Forge\Requests\Recipes\ForgeRecipesRunsStoreRequest;
use TeamNifty\Forge\Requests\Recipes\ForgeRecipesShowRequest;
use TeamNifty\Forge\Requests\Recipes\OrganizationRecipesStoreRequest;
use TeamNifty\Forge\Requests\Recipes\OrganizationsRecipesDestroyRequest;
use TeamNifty\Forge\Requests\Recipes\OrganizationsRecipesIndexRequest;
use TeamNifty\Forge\Requests\Recipes\OrganizationsRecipesRunsIndexRequest;
use TeamNifty\Forge\Requests\Recipes\OrganizationsRecipesRunsShowRequest;
use TeamNifty\Forge\Requests\Recipes\OrganizationsRecipesRunsStoreRequest;
use TeamNifty\Forge\Requests\Recipes\OrganizationsRecipesShowRequest;
use TeamNifty\Forge\Requests\Recipes\OrganizationsRecipesUpdateRequest;
use TeamNifty\Forge\Requests\Recipes\OrganizationsTeamsRecipesDestroyRequest;
use TeamNifty\Forge\Requests\Recipes\OrganizationsTeamsRecipesIndexRequest;
use TeamNifty\Forge\Requests\Recipes\OrganizationsTeamsRecipesStoreRequest;

class Recipes extends BaseResource
{
    /**
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function forgeRecipesIndexRequest(?int $pagesize = null, ?string $pagecursor = null): Response
    {
        return $this->connector->send(new ForgeRecipesIndexRequest($pagesize, $pagecursor));
    }

    /**
     * @param  int  $forgeRecipe  The forge recipe ID
     * @param  null|bool  $email  Whether to send an email notification when the recipe has completed.
     * @param  array  $servers  The servers on which to run the recipe on.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function forgeRecipesRunsStoreRequest(int $forgeRecipe, ?bool $email, array $servers): Response
    {
        return $this->connector->send(new ForgeRecipesRunsStoreRequest($forgeRecipe, $email, $servers));
    }

    /**
     * @param  int  $forgeRecipe  The forge recipe ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function forgeRecipesShowRequest(int $forgeRecipe): Response
    {
        return $this->connector->send(new ForgeRecipesShowRequest($forgeRecipe));
    }

    /**
     * @param  string  $organization  The organization slug
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationRecipesStoreRequest(
        string $organization,
        string $name,
        CreateBackgroundProcessRequestUser $user,
        string $script,
        ?string $teamId = null,
    ): Response {
        return $this->connector->send(new OrganizationRecipesStoreRequest($organization, $name, $user, $script, $teamId));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $recipe  The recipe ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsRecipesDestroyRequest(string $organization, int $recipe): Response
    {
        return $this->connector->send(new OrganizationsRecipesDestroyRequest($organization, $recipe));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsRecipesIndexRequest(
        string $organization,
        ?int $pagesize = null,
        ?string $pagecursor = null,
    ): Response {
        return $this->connector->send(new OrganizationsRecipesIndexRequest($organization, $pagesize, $pagecursor));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $recipe  The recipe ID
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsRecipesRunsIndexRequest(
        string $organization,
        int $recipe,
        ?int $pagesize = null,
        ?string $pagecursor = null,
    ): Response {
        return $this->connector->send(new OrganizationsRecipesRunsIndexRequest($organization, $recipe, $pagesize, $pagecursor));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $recipe  The recipe ID
     * @param  int  $log  The log ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsRecipesRunsShowRequest(string $organization, int $recipe, int $log): Response
    {
        return $this->connector->send(new OrganizationsRecipesRunsShowRequest($organization, $recipe, $log));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $recipe  The recipe ID
     * @param  null|bool  $email  Whether to send an email notification when the recipe has completed.
     * @param  array  $servers  The servers on which to run the recipe on.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsRecipesRunsStoreRequest(
        string $organization,
        int $recipe,
        ?bool $email,
        array $servers,
    ): Response {
        return $this->connector->send(new OrganizationsRecipesRunsStoreRequest($organization, $recipe, $email, $servers));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $recipe  The recipe ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsRecipesShowRequest(string $organization, int $recipe): Response
    {
        return $this->connector->send(new OrganizationsRecipesShowRequest($organization, $recipe));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $recipe  The recipe ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsRecipesUpdateRequest(
        string $organization,
        int $recipe,
        ?string $name = null,
        ?CreateBackgroundProcessRequestUser $user = null,
        ?string $script = null,
    ): Response {
        return $this->connector->send(new OrganizationsRecipesUpdateRequest($organization, $recipe, $name, $user, $script));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     * @param  int  $recipe  The recipe ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsTeamsRecipesDestroyRequest(string $organization, int $team, int $recipe): Response
    {
        return $this->connector->send(new OrganizationsTeamsRecipesDestroyRequest($organization, $team, $recipe));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsTeamsRecipesIndexRequest(
        string $organization,
        int $team,
        ?int $pagesize = null,
        ?string $pagecursor = null,
    ): Response {
        return $this->connector->send(new OrganizationsTeamsRecipesIndexRequest($organization, $team, $pagesize, $pagecursor));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     * @param  int  $recipeId  The ID of the recipe to share with the team.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsTeamsRecipesStoreRequest(string $organization, int $team, int $recipeId): Response
    {
        return $this->connector->send(new OrganizationsTeamsRecipesStoreRequest($organization, $team, $recipeId));
    }
}
