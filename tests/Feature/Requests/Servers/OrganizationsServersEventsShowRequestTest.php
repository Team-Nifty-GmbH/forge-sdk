<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersEventsShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersEventsShowRequest(organization: 'test-value', server: 1, event: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersEventsShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersEventsShowRequest(organization: 'test-value', server: 1, event: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersEventsShowRequest(organization: 'test-value', server: 1, event: 1);

    expect($request->resolveEndpoint())->toBeString();
});
