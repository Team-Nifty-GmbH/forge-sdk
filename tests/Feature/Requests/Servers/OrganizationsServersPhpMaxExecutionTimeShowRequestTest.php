<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpMaxExecutionTimeShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersPhpMaxExecutionTimeShowRequest(organization: 'test-value', server: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersPhpMaxExecutionTimeShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersPhpMaxExecutionTimeShowRequest(organization: 'test-value', server: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersPhpMaxExecutionTimeShowRequest(organization: 'test-value', server: 1);

    expect($request->resolveEndpoint())->toBeString();
});
