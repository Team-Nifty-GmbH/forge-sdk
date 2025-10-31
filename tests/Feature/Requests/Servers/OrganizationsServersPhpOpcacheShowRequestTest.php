<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpOpcacheShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersPhpOpcacheShowRequest(organization: 'test-value', server: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersPhpOpcacheShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersPhpOpcacheShowRequest(organization: 'test-value', server: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersPhpOpcacheShowRequest(organization: 'test-value', server: 1);

    expect($request->resolveEndpoint())->toBeString();
});
