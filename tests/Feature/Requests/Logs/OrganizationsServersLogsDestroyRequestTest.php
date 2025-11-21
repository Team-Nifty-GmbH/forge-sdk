<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Logs\OrganizationsServersLogsDestroyRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersLogsDestroyRequest(organization: 'test-value', server: 1, key: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersLogsDestroyRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersLogsDestroyRequest(organization: 'test-value', server: 1, key: 'test-value');

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersLogsDestroyRequest(organization: 'test-value', server: 1, key: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
