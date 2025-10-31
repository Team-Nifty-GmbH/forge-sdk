<?php

use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsOctaneStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesIntegrationsOctaneStoreRequest(organization: 'test-value', server: 1, site: 1, port: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersSitesIntegrationsOctaneStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesIntegrationsOctaneStoreRequest(organization: 'test-value', server: 1, site: 1, port: 'test-value');

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesIntegrationsOctaneStoreRequest(organization: 'test-value', server: 1, site: 1, port: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersSitesIntegrationsOctaneStoreRequest(organization: 'test-value', server: 1, site: 1, port: 'test-value');

    expect($request->body()->all())->toBeArray();
});
