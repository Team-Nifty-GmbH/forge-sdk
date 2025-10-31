<?php

use TeamNifty\Forge\Requests\Roles\OrganizationsRolesPermissionsIndexRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsRolesPermissionsIndexRequest(organization: 'test-value', role: 1, pagesize: 1, pagecursor: 'test-value', filtername: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsRolesPermissionsIndexRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsRolesPermissionsIndexRequest(organization: 'test-value', role: 1, pagesize: 1, pagecursor: 'test-value', filtername: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsRolesPermissionsIndexRequest(organization: 'test-value', role: 1, pagesize: 1, pagecursor: 'test-value', filtername: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
