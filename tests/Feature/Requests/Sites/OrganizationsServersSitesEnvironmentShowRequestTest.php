<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesEnvironmentShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesEnvironmentShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesEnvironmentShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesEnvironmentShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesEnvironmentShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->resolveEndpoint())->toBeString();
});
