<?php

use TeamNifty\Forge\Requests\Monitors\OrganizationsServersMonitorsDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersMonitorsDestroyRequest(organization: 'test-value', server: 1, monitor: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersMonitorsDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersMonitorsDestroyRequest(organization: 'test-value', server: 1, monitor: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersMonitorsDestroyRequest(organization: 'test-value', server: 1, monitor: 1);

    expect($request->resolveEndpoint())->toBeString();
});
