<?php

use TeamNifty\Forge\Requests\Recipes\OrganizationsRecipesDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsRecipesDestroyRequest(organization: 'test-value', recipe: 1);

    expect($request)->toBeInstanceOf(OrganizationsRecipesDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsRecipesDestroyRequest(organization: 'test-value', recipe: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsRecipesDestroyRequest(organization: 'test-value', recipe: 1);

    expect($request->resolveEndpoint())->toBeString();
});
