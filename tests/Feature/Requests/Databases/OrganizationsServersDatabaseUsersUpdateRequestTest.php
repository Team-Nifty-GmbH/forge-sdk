<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Databases\OrganizationsServersDatabaseUsersUpdateRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersDatabaseUsersUpdateRequest(organization: 'test-value', server: 1, databaseUser: 1, password: null, databaseIds: ['test' => 'value']);

    expect($request)->toBeInstanceOf(OrganizationsServersDatabaseUsersUpdateRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersDatabaseUsersUpdateRequest(organization: 'test-value', server: 1, databaseUser: 1, password: null, databaseIds: ['test' => 'value']);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersDatabaseUsersUpdateRequest(organization: 'test-value', server: 1, databaseUser: 1, password: null, databaseIds: ['test' => 'value']);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersDatabaseUsersUpdateRequest(organization: 'test-value', server: 1, databaseUser: 1, password: null, databaseIds: ['test' => 'value']);

    expect($request->body()->all())->toBeArray();
});
