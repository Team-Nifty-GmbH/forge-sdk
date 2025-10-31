<?php

use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesDeploymentsLogShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesDeploymentsLogShowRequest(organization: 'test-value', server: 1, site: 1, deployment: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesDeploymentsLogShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesDeploymentsLogShowRequest(organization: 'test-value', server: 1, site: 1, deployment: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesDeploymentsLogShowRequest(organization: 'test-value', server: 1, site: 1, deployment: 1);

    expect($request->resolveEndpoint())->toBeString();
});
