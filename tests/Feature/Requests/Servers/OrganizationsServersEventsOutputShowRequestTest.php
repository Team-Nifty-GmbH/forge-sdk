<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersEventsOutputShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersEventsOutputShowRequest(organization: 'test-value', server: 1, event: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersEventsOutputShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersEventsOutputShowRequest(organization: 'test-value', server: 1, event: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersEventsOutputShowRequest(organization: 'test-value', server: 1, event: 1);

    expect($request->resolveEndpoint())->toBeString();
});
