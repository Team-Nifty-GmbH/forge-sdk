<?php

use TeamNifty\Forge\Requests\Logs\OrganizationsServersLogsDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersLogsDestroyRequest(organization: 'test-value', server: 1, key: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersLogsDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersLogsDestroyRequest(organization: 'test-value', server: 1, key: 'test-value');

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersLogsDestroyRequest(organization: 'test-value', server: 1, key: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
