<?php

use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesDeploymentsShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesDeploymentsShowRequest(organization: 'test-value', server: 1, site: 1, deployment: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesDeploymentsShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesDeploymentsShowRequest(organization: 'test-value', server: 1, site: 1, deployment: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesDeploymentsShowRequest(organization: 'test-value', server: 1, site: 1, deployment: 1);

    expect($request->resolveEndpoint())->toBeString();
});
