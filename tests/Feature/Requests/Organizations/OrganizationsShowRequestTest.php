<?php

use TeamNifty\Forge\Requests\Organizations\OrganizationsShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsShowRequest(organization: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsShowRequest(organization: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsShowRequest(organization: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
