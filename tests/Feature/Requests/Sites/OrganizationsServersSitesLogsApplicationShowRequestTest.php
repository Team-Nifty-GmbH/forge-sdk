<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesLogsApplicationShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesLogsApplicationShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesLogsApplicationShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesLogsApplicationShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesLogsApplicationShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->resolveEndpoint())->toBeString();
});
