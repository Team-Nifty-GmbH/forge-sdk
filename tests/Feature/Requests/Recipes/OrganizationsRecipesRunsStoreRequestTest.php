<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Recipes\OrganizationsRecipesRunsStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsRecipesRunsStoreRequest(organization: 'test-value', recipe: 1, email: true, servers: ['test' => 'value']);

    expect($request)->toBeInstanceOf(OrganizationsRecipesRunsStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsRecipesRunsStoreRequest(organization: 'test-value', recipe: 1, email: true, servers: ['test' => 'value']);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsRecipesRunsStoreRequest(organization: 'test-value', recipe: 1, email: true, servers: ['test' => 'value']);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsRecipesRunsStoreRequest(organization: 'test-value', recipe: 1, email: true, servers: ['test' => 'value']);

    expect($request->body()->all())->toBeArray();
});
