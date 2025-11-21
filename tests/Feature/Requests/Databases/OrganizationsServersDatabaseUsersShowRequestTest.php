<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Databases\OrganizationsServersDatabaseUsersShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersDatabaseUsersShowRequest(organization: 'test-value', server: 1, databaseUser: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersDatabaseUsersShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersDatabaseUsersShowRequest(organization: 'test-value', server: 1, databaseUser: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersDatabaseUsersShowRequest(organization: 'test-value', server: 1, databaseUser: 1);

    expect($request->resolveEndpoint())->toBeString();
});
