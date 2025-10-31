<?php

use TeamNifty\Forge\Requests\Roles\OrganizationsRolesShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsRolesShowRequest(organization: 'test-value', role: 1);

    expect($request)->toBeInstanceOf(OrganizationsRolesShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsRolesShowRequest(organization: 'test-value', role: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsRolesShowRequest(organization: 'test-value', role: 1);

    expect($request->resolveEndpoint())->toBeString();
});
