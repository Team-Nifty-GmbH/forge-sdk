<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesLogsNginxErrorShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesLogsNginxErrorShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesLogsNginxErrorShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesLogsNginxErrorShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesLogsNginxErrorShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->resolveEndpoint())->toBeString();
});
