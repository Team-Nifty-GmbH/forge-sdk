<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Databases\OrganizationsServersDatabaseUsersStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersDatabaseUsersStoreRequest(organization: 'test-value', server: 1, name: 'test-value', password: 'test-value', readOnly: true, databaseIds: ['test' => 'value']);

    expect($request)->toBeInstanceOf(OrganizationsServersDatabaseUsersStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersDatabaseUsersStoreRequest(organization: 'test-value', server: 1, name: 'test-value', password: 'test-value', readOnly: true, databaseIds: ['test' => 'value']);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersDatabaseUsersStoreRequest(organization: 'test-value', server: 1, name: 'test-value', password: 'test-value', readOnly: true, databaseIds: ['test' => 'value']);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersDatabaseUsersStoreRequest(organization: 'test-value', server: 1, name: 'test-value', password: 'test-value', readOnly: true, databaseIds: ['test' => 'value']);

    expect($request->body()->all())->toBeArray();
});
