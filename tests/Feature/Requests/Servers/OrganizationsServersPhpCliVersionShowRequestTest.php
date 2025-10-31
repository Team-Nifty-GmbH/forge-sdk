<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpCliVersionShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersPhpCliVersionShowRequest(organization: 'test-value', server: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersPhpCliVersionShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersPhpCliVersionShowRequest(organization: 'test-value', server: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersPhpCliVersionShowRequest(organization: 'test-value', server: 1);

    expect($request->resolveEndpoint())->toBeString();
});
