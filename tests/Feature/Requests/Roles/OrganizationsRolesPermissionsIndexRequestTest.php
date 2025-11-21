<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Roles\OrganizationsRolesPermissionsIndexRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsRolesPermissionsIndexRequest(organization: 'test-value', role: 1, pagesize: 1, pagecursor: 'test-value', filtername: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsRolesPermissionsIndexRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsRolesPermissionsIndexRequest(organization: 'test-value', role: 1, pagesize: 1, pagecursor: 'test-value', filtername: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsRolesPermissionsIndexRequest(organization: 'test-value', role: 1, pagesize: 1, pagecursor: 'test-value', filtername: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
