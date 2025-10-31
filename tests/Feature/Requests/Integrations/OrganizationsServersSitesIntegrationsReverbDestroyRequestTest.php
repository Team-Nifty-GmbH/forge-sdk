<?php

use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsReverbDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesIntegrationsReverbDestroyRequest(organization: 'test-value', server: 1, site: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesIntegrationsReverbDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesIntegrationsReverbDestroyRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesIntegrationsReverbDestroyRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->resolveEndpoint())->toBeString();
});
