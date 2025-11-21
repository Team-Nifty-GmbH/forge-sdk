<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Recipes\OrganizationsRecipesShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsRecipesShowRequest(organization: 'test-value', recipe: 1);

    expect($request)->toBeInstanceOf(OrganizationsRecipesShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsRecipesShowRequest(organization: 'test-value', recipe: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsRecipesShowRequest(organization: 'test-value', recipe: 1);

    expect($request->resolveEndpoint())->toBeString();
});
