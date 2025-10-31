<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesLogsApplicationDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesLogsApplicationDestroyRequest(organization: 'test-value', server: 1, site: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesLogsApplicationDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesLogsApplicationDestroyRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesLogsApplicationDestroyRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->resolveEndpoint())->toBeString();
});
