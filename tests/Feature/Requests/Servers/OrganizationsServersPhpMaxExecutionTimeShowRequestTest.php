<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpMaxExecutionTimeShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersPhpMaxExecutionTimeShowRequest(organization: 'test-value', server: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersPhpMaxExecutionTimeShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersPhpMaxExecutionTimeShowRequest(organization: 'test-value', server: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersPhpMaxExecutionTimeShowRequest(organization: 'test-value', server: 1);

    expect($request->resolveEndpoint())->toBeString();
});
