<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsOctaneStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesIntegrationsOctaneStoreRequest(organization: 'test-value', server: 1, site: 1, port: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersSitesIntegrationsOctaneStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesIntegrationsOctaneStoreRequest(organization: 'test-value', server: 1, site: 1, port: 'test-value');

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesIntegrationsOctaneStoreRequest(organization: 'test-value', server: 1, site: 1, port: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersSitesIntegrationsOctaneStoreRequest(organization: 'test-value', server: 1, site: 1, port: 'test-value');

    expect($request->body()->all())->toBeArray();
});
