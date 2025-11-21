<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Monitors\OrganizationsServersMonitorsShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersMonitorsShowRequest(organization: 'test-value', server: 1, monitor: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersMonitorsShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersMonitorsShowRequest(organization: 'test-value', server: 1, monitor: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersMonitorsShowRequest(organization: 'test-value', server: 1, monitor: 1);

    expect($request->resolveEndpoint())->toBeString();
});
