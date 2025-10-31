<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsSitesShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsSitesShowRequest(organization: 'test-value', site: 1);

    expect($request)->toBeInstanceOf(OrganizationsSitesShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsSitesShowRequest(organization: 'test-value', site: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsSitesShowRequest(organization: 'test-value', site: 1);

    expect($request->resolveEndpoint())->toBeString();
});
