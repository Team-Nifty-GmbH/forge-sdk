<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Monitors\OrganizationsServersMonitorsDestroyRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersMonitorsDestroyRequest(organization: 'test-value', server: 1, monitor: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersMonitorsDestroyRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersMonitorsDestroyRequest(organization: 'test-value', server: 1, monitor: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersMonitorsDestroyRequest(organization: 'test-value', server: 1, monitor: 1);

    expect($request->resolveEndpoint())->toBeString();
});
