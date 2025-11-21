<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Recipes\OrganizationsRecipesDestroyRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsRecipesDestroyRequest(organization: 'test-value', recipe: 1);

    expect($request)->toBeInstanceOf(OrganizationsRecipesDestroyRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsRecipesDestroyRequest(organization: 'test-value', recipe: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsRecipesDestroyRequest(organization: 'test-value', recipe: 1);

    expect($request->resolveEndpoint())->toBeString();
});
