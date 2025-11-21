<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Databases\OrganizationsServersDatabaseUsersDestroyRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersDatabaseUsersDestroyRequest(organization: 'test-value', server: 1, databaseUser: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersDatabaseUsersDestroyRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersDatabaseUsersDestroyRequest(organization: 'test-value', server: 1, databaseUser: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersDatabaseUsersDestroyRequest(organization: 'test-value', server: 1, databaseUser: 1);

    expect($request->resolveEndpoint())->toBeString();
});
