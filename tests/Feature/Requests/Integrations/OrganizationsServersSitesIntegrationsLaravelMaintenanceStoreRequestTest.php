<?php

use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsLaravelMaintenanceStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesIntegrationsLaravelMaintenanceStoreRequest(organization: 'test-value', server: 1, site: 1, secret: NULL, redirect: NULL);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesIntegrationsLaravelMaintenanceStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesIntegrationsLaravelMaintenanceStoreRequest(organization: 'test-value', server: 1, site: 1, secret: NULL, redirect: NULL);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesIntegrationsLaravelMaintenanceStoreRequest(organization: 'test-value', server: 1, site: 1, secret: NULL, redirect: NULL);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersSitesIntegrationsLaravelMaintenanceStoreRequest(organization: 'test-value', server: 1, site: 1, secret: NULL, redirect: NULL);

    expect($request->body()->all())->toBeArray();
});
