<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Roles\OrganizationsRolesUpdateRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsRolesUpdateRequest(organization: 'test-value', role: 1);

    expect($request)->toBeInstanceOf(OrganizationsRolesUpdateRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsRolesUpdateRequest(organization: 'test-value', role: 1);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsRolesUpdateRequest(organization: 'test-value', role: 1);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsRolesUpdateRequest(organization: 'test-value', role: 1);

    expect($request->body()->all())->toBeArray();
});
