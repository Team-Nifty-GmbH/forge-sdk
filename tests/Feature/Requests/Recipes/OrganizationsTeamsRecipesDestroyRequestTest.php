<?php

use TeamNifty\Forge\Requests\Recipes\OrganizationsTeamsRecipesDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsTeamsRecipesDestroyRequest(organization: 'test-value', team: 1, recipe: 1);

    expect($request)->toBeInstanceOf(OrganizationsTeamsRecipesDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsTeamsRecipesDestroyRequest(organization: 'test-value', team: 1, recipe: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsTeamsRecipesDestroyRequest(organization: 'test-value', team: 1, recipe: 1);

    expect($request->resolveEndpoint())->toBeString();
});
