<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesLogsNginxAccessDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesLogsNginxAccessDestroyRequest(organization: 'test-value', server: 1, site: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesLogsNginxAccessDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesLogsNginxAccessDestroyRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesLogsNginxAccessDestroyRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->resolveEndpoint())->toBeString();
});
