<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersDestroyRequest(organization: 'test-value', server: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersDestroyRequest(organization: 'test-value', server: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersDestroyRequest(organization: 'test-value', server: 1);

    expect($request->resolveEndpoint())->toBeString();
});
