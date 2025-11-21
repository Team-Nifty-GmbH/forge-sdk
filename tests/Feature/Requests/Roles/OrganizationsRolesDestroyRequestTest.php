<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Roles\OrganizationsRolesDestroyRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsRolesDestroyRequest(organization: 'test-value', role: 1);

    expect($request)->toBeInstanceOf(OrganizationsRolesDestroyRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsRolesDestroyRequest(organization: 'test-value', role: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsRolesDestroyRequest(organization: 'test-value', role: 1);

    expect($request->resolveEndpoint())->toBeString();
});
