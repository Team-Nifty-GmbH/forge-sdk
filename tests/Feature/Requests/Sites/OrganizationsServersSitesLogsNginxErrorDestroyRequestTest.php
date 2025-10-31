<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesLogsNginxErrorDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesLogsNginxErrorDestroyRequest(organization: 'test-value', server: 1, site: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesLogsNginxErrorDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesLogsNginxErrorDestroyRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesLogsNginxErrorDestroyRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->resolveEndpoint())->toBeString();
});
