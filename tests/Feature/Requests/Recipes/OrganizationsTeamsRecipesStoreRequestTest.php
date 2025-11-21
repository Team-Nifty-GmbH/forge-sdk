<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Recipes\OrganizationsTeamsRecipesStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsTeamsRecipesStoreRequest(organization: 'test-value', team: 1, recipeId: 1);

    expect($request)->toBeInstanceOf(OrganizationsTeamsRecipesStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsTeamsRecipesStoreRequest(organization: 'test-value', team: 1, recipeId: 1);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsTeamsRecipesStoreRequest(organization: 'test-value', team: 1, recipeId: 1);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsTeamsRecipesStoreRequest(organization: 'test-value', team: 1, recipeId: 1);

    expect($request->body()->all())->toBeArray();
});
