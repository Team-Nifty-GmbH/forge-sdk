<?php

use TeamNifty\Forge\Requests\Databases\OrganizationsServersDatabaseUsersUpdateRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersDatabaseUsersUpdateRequest(organization: 'test-value', server: 1, databaseUser: 1, password: NULL, databaseIds: ['test' => 'value']);

    expect($request)->toBeInstanceOf(OrganizationsServersDatabaseUsersUpdateRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersDatabaseUsersUpdateRequest(organization: 'test-value', server: 1, databaseUser: 1, password: NULL, databaseIds: ['test' => 'value']);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersDatabaseUsersUpdateRequest(organization: 'test-value', server: 1, databaseUser: 1, password: NULL, databaseIds: ['test' => 'value']);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersDatabaseUsersUpdateRequest(organization: 'test-value', server: 1, databaseUser: 1, password: NULL, databaseIds: ['test' => 'value']);

    expect($request->body()->all())->toBeArray();
});
