<?php

use TeamNifty\Forge\Requests\Recipes\OrganizationsRecipesRunsIndexRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsRecipesRunsIndexRequest(organization: 'test-value', recipe: 1, pagesize: 1, pagecursor: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsRecipesRunsIndexRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsRecipesRunsIndexRequest(organization: 'test-value', recipe: 1, pagesize: 1, pagecursor: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsRecipesRunsIndexRequest(organization: 'test-value', recipe: 1, pagesize: 1, pagecursor: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
