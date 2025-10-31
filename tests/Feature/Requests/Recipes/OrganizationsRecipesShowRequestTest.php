<?php

use TeamNifty\Forge\Requests\Recipes\OrganizationsRecipesShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsRecipesShowRequest(organization: 'test-value', recipe: 1);

    expect($request)->toBeInstanceOf(OrganizationsRecipesShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsRecipesShowRequest(organization: 'test-value', recipe: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsRecipesShowRequest(organization: 'test-value', recipe: 1);

    expect($request->resolveEndpoint())->toBeString();
});
