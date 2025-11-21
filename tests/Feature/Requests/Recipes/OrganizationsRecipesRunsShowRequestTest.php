<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Recipes\OrganizationsRecipesRunsShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsRecipesRunsShowRequest(organization: 'test-value', recipe: 1, log: 1);

    expect($request)->toBeInstanceOf(OrganizationsRecipesRunsShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsRecipesRunsShowRequest(organization: 'test-value', recipe: 1, log: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsRecipesRunsShowRequest(organization: 'test-value', recipe: 1, log: 1);

    expect($request->resolveEndpoint())->toBeString();
});
