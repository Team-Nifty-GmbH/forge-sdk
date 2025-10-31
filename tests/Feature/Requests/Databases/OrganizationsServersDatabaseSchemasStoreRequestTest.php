<?php

use TeamNifty\Forge\Requests\Databases\OrganizationsServersDatabaseSchemasStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersDatabaseSchemasStoreRequest(organization: 'test-value', server: 1, name: 'test-value', user: NULL, password: NULL);

    expect($request)->toBeInstanceOf(OrganizationsServersDatabaseSchemasStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersDatabaseSchemasStoreRequest(organization: 'test-value', server: 1, name: 'test-value', user: NULL, password: NULL);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersDatabaseSchemasStoreRequest(organization: 'test-value', server: 1, name: 'test-value', user: NULL, password: NULL);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersDatabaseSchemasStoreRequest(organization: 'test-value', server: 1, name: 'test-value', user: NULL, password: NULL);

    expect($request->body()->all())->toBeArray();
});
