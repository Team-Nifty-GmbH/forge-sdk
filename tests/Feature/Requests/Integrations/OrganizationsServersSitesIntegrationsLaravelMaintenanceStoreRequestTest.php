<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsLaravelMaintenanceStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesIntegrationsLaravelMaintenanceStoreRequest(organization: 'test-value', server: 1, site: 1, secret: null, redirect: null);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesIntegrationsLaravelMaintenanceStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesIntegrationsLaravelMaintenanceStoreRequest(organization: 'test-value', server: 1, site: 1, secret: null, redirect: null);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesIntegrationsLaravelMaintenanceStoreRequest(organization: 'test-value', server: 1, site: 1, secret: null, redirect: null);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersSitesIntegrationsLaravelMaintenanceStoreRequest(organization: 'test-value', server: 1, site: 1, secret: null, redirect: null);

    expect($request->body()->all())->toBeArray();
});
