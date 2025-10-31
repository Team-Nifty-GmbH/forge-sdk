<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesLogsNginxAccessShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesLogsNginxAccessShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesLogsNginxAccessShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesLogsNginxAccessShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesLogsNginxAccessShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->resolveEndpoint())->toBeString();
});
