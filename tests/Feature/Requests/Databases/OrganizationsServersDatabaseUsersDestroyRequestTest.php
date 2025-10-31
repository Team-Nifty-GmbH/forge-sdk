<?php

use TeamNifty\Forge\Requests\Databases\OrganizationsServersDatabaseUsersDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersDatabaseUsersDestroyRequest(organization: 'test-value', server: 1, databaseUser: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersDatabaseUsersDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersDatabaseUsersDestroyRequest(organization: 'test-value', server: 1, databaseUser: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersDatabaseUsersDestroyRequest(organization: 'test-value', server: 1, databaseUser: 1);

    expect($request->resolveEndpoint())->toBeString();
});
