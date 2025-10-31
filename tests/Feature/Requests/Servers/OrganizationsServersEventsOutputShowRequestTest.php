<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersEventsOutputShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersEventsOutputShowRequest(organization: 'test-value', server: 1, event: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersEventsOutputShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersEventsOutputShowRequest(organization: 'test-value', server: 1, event: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersEventsOutputShowRequest(organization: 'test-value', server: 1, event: 1);

    expect($request->resolveEndpoint())->toBeString();
});
