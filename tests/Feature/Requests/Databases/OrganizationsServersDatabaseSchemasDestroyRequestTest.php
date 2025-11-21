<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Databases\OrganizationsServersDatabaseSchemasDestroyRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersDatabaseSchemasDestroyRequest(organization: 'test-value', server: 1, database: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersDatabaseSchemasDestroyRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersDatabaseSchemasDestroyRequest(organization: 'test-value', server: 1, database: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersDatabaseSchemasDestroyRequest(organization: 'test-value', server: 1, database: 1);

    expect($request->resolveEndpoint())->toBeString();
});
