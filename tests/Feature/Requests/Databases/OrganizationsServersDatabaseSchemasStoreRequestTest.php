<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Databases\OrganizationsServersDatabaseSchemasStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersDatabaseSchemasStoreRequest(organization: 'test-value', server: 1, name: 'test-value', user: null, password: null);

    expect($request)->toBeInstanceOf(OrganizationsServersDatabaseSchemasStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersDatabaseSchemasStoreRequest(organization: 'test-value', server: 1, name: 'test-value', user: null, password: null);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersDatabaseSchemasStoreRequest(organization: 'test-value', server: 1, name: 'test-value', user: null, password: null);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersDatabaseSchemasStoreRequest(organization: 'test-value', server: 1, name: 'test-value', user: null, password: null);

    expect($request->body()->all())->toBeArray();
});
