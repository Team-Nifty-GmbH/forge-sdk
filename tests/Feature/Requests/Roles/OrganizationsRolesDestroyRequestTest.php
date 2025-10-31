<?php

use TeamNifty\Forge\Requests\Roles\OrganizationsRolesDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsRolesDestroyRequest(organization: 'test-value', role: 1);

    expect($request)->toBeInstanceOf(OrganizationsRolesDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsRolesDestroyRequest(organization: 'test-value', role: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsRolesDestroyRequest(organization: 'test-value', role: 1);

    expect($request->resolveEndpoint())->toBeString();
});
