<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Roles\OrganizationsRolesStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsRolesStoreRequest(organization: 'test-value', name: 'test-value', permissions: ['test' => 'value']);

    expect($request)->toBeInstanceOf(OrganizationsRolesStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsRolesStoreRequest(organization: 'test-value', name: 'test-value', permissions: ['test' => 'value']);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsRolesStoreRequest(organization: 'test-value', name: 'test-value', permissions: ['test' => 'value']);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsRolesStoreRequest(organization: 'test-value', name: 'test-value', permissions: ['test' => 'value']);

    expect($request->body()->all())->toBeArray();
});
