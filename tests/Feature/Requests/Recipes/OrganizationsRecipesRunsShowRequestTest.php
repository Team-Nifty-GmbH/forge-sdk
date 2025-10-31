<?php

use TeamNifty\Forge\Requests\Recipes\OrganizationsRecipesRunsShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsRecipesRunsShowRequest(organization: 'test-value', recipe: 1, log: 1);

    expect($request)->toBeInstanceOf(OrganizationsRecipesRunsShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsRecipesRunsShowRequest(organization: 'test-value', recipe: 1, log: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsRecipesRunsShowRequest(organization: 'test-value', recipe: 1, log: 1);

    expect($request->resolveEndpoint())->toBeString();
});
