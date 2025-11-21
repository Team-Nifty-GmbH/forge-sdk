<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Databases\OrganizationsServersDatabaseSchemasShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersDatabaseSchemasShowRequest(organization: 'test-value', server: 1, database: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersDatabaseSchemasShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersDatabaseSchemasShowRequest(organization: 'test-value', server: 1, database: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersDatabaseSchemasShowRequest(organization: 'test-value', server: 1, database: 1);

    expect($request->resolveEndpoint())->toBeString();
});
