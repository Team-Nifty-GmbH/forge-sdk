<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Recipes\OrganizationsRecipesRunsIndexRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsRecipesRunsIndexRequest(organization: 'test-value', recipe: 1, pagesize: 1, pagecursor: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsRecipesRunsIndexRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsRecipesRunsIndexRequest(organization: 'test-value', recipe: 1, pagesize: 1, pagecursor: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsRecipesRunsIndexRequest(organization: 'test-value', recipe: 1, pagesize: 1, pagecursor: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
