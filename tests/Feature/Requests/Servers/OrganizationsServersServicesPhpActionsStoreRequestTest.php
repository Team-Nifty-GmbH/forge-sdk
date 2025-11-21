<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersServicesPhpActionsStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersServicesPhpActionsStoreRequest(organization: 'test-value', server: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersServicesPhpActionsStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersServicesPhpActionsStoreRequest(organization: 'test-value', server: 1);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersServicesPhpActionsStoreRequest(organization: 'test-value', server: 1);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersServicesPhpActionsStoreRequest(organization: 'test-value', server: 1);

    expect($request->body()->all())->toBeArray();
});
