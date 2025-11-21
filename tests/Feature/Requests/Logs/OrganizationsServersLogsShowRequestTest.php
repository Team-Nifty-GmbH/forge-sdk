<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Logs\OrganizationsServersLogsShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersLogsShowRequest(organization: 'test-value', server: 1, key: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersLogsShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersLogsShowRequest(organization: 'test-value', server: 1, key: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersLogsShowRequest(organization: 'test-value', server: 1, key: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
