<?php

use TeamNifty\Forge\Requests\Databases\OrganizationsServersDatabaseUsersShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersDatabaseUsersShowRequest(organization: 'test-value', server: 1, databaseUser: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersDatabaseUsersShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersDatabaseUsersShowRequest(organization: 'test-value', server: 1, databaseUser: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersDatabaseUsersShowRequest(organization: 'test-value', server: 1, databaseUser: 1);

    expect($request->resolveEndpoint())->toBeString();
});
