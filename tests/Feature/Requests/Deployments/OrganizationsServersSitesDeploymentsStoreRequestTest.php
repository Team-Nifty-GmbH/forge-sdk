<?php

use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesDeploymentsStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesDeploymentsStoreRequest(organization: 'test-value', server: 1, site: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesDeploymentsStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesDeploymentsStoreRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesDeploymentsStoreRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersSitesDeploymentsStoreRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->body()->all())->toBeArray();
});
