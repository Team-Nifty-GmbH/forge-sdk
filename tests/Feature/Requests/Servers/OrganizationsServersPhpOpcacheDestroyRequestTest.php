<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpOpcacheDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersPhpOpcacheDestroyRequest(organization: 'test-value', server: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersPhpOpcacheDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersPhpOpcacheDestroyRequest(organization: 'test-value', server: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersPhpOpcacheDestroyRequest(organization: 'test-value', server: 1);

    expect($request->resolveEndpoint())->toBeString();
});
