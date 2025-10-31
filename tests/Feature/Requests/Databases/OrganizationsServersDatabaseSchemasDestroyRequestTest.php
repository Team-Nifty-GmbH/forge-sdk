<?php

use TeamNifty\Forge\Requests\Databases\OrganizationsServersDatabaseSchemasDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersDatabaseSchemasDestroyRequest(organization: 'test-value', server: 1, database: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersDatabaseSchemasDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersDatabaseSchemasDestroyRequest(organization: 'test-value', server: 1, database: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersDatabaseSchemasDestroyRequest(organization: 'test-value', server: 1, database: 1);

    expect($request->resolveEndpoint())->toBeString();
});
