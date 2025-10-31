<?php

use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsReverbStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesIntegrationsReverbStoreRequest(organization: 'test-value', server: 1, site: 1, host: 'test-value', port: 'test-value', connections: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesIntegrationsReverbStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesIntegrationsReverbStoreRequest(organization: 'test-value', server: 1, site: 1, host: 'test-value', port: 'test-value', connections: 1);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesIntegrationsReverbStoreRequest(organization: 'test-value', server: 1, site: 1, host: 'test-value', port: 'test-value', connections: 1);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersSitesIntegrationsReverbStoreRequest(organization: 'test-value', server: 1, site: 1, host: 'test-value', port: 'test-value', connections: 1);

    expect($request->body()->all())->toBeArray();
});
