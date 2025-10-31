<?php

use TeamNifty\Forge\Requests\Monitors\OrganizationsServersMonitorsShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersMonitorsShowRequest(organization: 'test-value', server: 1, monitor: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersMonitorsShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersMonitorsShowRequest(organization: 'test-value', server: 1, monitor: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersMonitorsShowRequest(organization: 'test-value', server: 1, monitor: 1);

    expect($request->resolveEndpoint())->toBeString();
});
