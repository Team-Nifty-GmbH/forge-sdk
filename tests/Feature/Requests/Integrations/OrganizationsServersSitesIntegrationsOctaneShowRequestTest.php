<?php

use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsOctaneShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesIntegrationsOctaneShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesIntegrationsOctaneShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesIntegrationsOctaneShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesIntegrationsOctaneShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->resolveEndpoint())->toBeString();
});
