<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Recipes\OrganizationsTeamsRecipesDestroyRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsTeamsRecipesDestroyRequest(organization: 'test-value', team: 1, recipe: 1);

    expect($request)->toBeInstanceOf(OrganizationsTeamsRecipesDestroyRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsTeamsRecipesDestroyRequest(organization: 'test-value', team: 1, recipe: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsTeamsRecipesDestroyRequest(organization: 'test-value', team: 1, recipe: 1);

    expect($request->resolveEndpoint())->toBeString();
});
