<?php

use TeamNifty\Forge\Requests\Roles\OrganizationsRolesUpdateRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsRolesUpdateRequest(organization: 'test-value', role: 1);

    expect($request)->toBeInstanceOf(OrganizationsRolesUpdateRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsRolesUpdateRequest(organization: 'test-value', role: 1);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsRolesUpdateRequest(organization: 'test-value', role: 1);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsRolesUpdateRequest(organization: 'test-value', role: 1);

    expect($request->body()->all())->toBeArray();
});
