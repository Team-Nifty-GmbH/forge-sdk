<?php

use TeamNifty\Forge\Requests\Databases\OrganizationsServersDatabaseUsersStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersDatabaseUsersStoreRequest(organization: 'test-value', server: 1, name: 'test-value', password: 'test-value', readOnly: true, databaseIds: ['test' => 'value']);

    expect($request)->toBeInstanceOf(OrganizationsServersDatabaseUsersStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersDatabaseUsersStoreRequest(organization: 'test-value', server: 1, name: 'test-value', password: 'test-value', readOnly: true, databaseIds: ['test' => 'value']);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersDatabaseUsersStoreRequest(organization: 'test-value', server: 1, name: 'test-value', password: 'test-value', readOnly: true, databaseIds: ['test' => 'value']);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersDatabaseUsersStoreRequest(organization: 'test-value', server: 1, name: 'test-value', password: 'test-value', readOnly: true, databaseIds: ['test' => 'value']);

    expect($request->body()->all())->toBeArray();
});
