<?php

use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsLaravelMaintenanceShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesIntegrationsLaravelMaintenanceShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesIntegrationsLaravelMaintenanceShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesIntegrationsLaravelMaintenanceShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesIntegrationsLaravelMaintenanceShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->resolveEndpoint())->toBeString();
});
