<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsOctaneDestroyRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesIntegrationsOctaneDestroyRequest(organization: 'test-value', server: 1, site: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesIntegrationsOctaneDestroyRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesIntegrationsOctaneDestroyRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesIntegrationsOctaneDestroyRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->resolveEndpoint())->toBeString();
});
