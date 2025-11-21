<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Roles\OrganizationsRolesIndexRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsRolesIndexRequest(organization: 'test-value', include: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value', filterpermissionsName: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsRolesIndexRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsRolesIndexRequest(organization: 'test-value', include: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value', filterpermissionsName: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsRolesIndexRequest(organization: 'test-value', include: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value', filterpermissionsName: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
