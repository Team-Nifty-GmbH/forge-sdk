<?php

use TeamNifty\Forge\Requests\Logs\OrganizationsServersLogsShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersLogsShowRequest(organization: 'test-value', server: 1, key: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersLogsShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersLogsShowRequest(organization: 'test-value', server: 1, key: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersLogsShowRequest(organization: 'test-value', server: 1, key: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
