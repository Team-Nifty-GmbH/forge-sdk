<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Recipes\OrganizationsRecipesIndexRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsRecipesIndexRequest(organization: 'test-value', pagesize: 1, pagecursor: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsRecipesIndexRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsRecipesIndexRequest(organization: 'test-value', pagesize: 1, pagecursor: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsRecipesIndexRequest(organization: 'test-value', pagesize: 1, pagecursor: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
