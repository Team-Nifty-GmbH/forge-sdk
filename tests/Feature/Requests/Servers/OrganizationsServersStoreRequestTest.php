<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersStoreRequest(organization: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersStoreRequest(organization: 'test-value');

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersStoreRequest(organization: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersStoreRequest(organization: 'test-value');

    expect($request->body()->all())->toBeArray();
});
