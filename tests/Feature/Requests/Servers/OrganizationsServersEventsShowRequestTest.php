<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersEventsShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersEventsShowRequest(organization: 'test-value', server: 1, event: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersEventsShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersEventsShowRequest(organization: 'test-value', server: 1, event: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersEventsShowRequest(organization: 'test-value', server: 1, event: 1);

    expect($request->resolveEndpoint())->toBeString();
});
