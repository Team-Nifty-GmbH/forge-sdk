<?php

use TeamNifty\Forge\Requests\Recipes\OrganizationsTeamsRecipesStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsTeamsRecipesStoreRequest(organization: 'test-value', team: 1, recipeId: 1);

    expect($request)->toBeInstanceOf(OrganizationsTeamsRecipesStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsTeamsRecipesStoreRequest(organization: 'test-value', team: 1, recipeId: 1);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsTeamsRecipesStoreRequest(organization: 'test-value', team: 1, recipeId: 1);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsTeamsRecipesStoreRequest(organization: 'test-value', team: 1, recipeId: 1);

    expect($request->body()->all())->toBeArray();
});
