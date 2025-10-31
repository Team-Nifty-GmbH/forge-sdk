<?php

use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesDeploymentsDeployHookShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesDeploymentsDeployHookShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesDeploymentsDeployHookShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesDeploymentsDeployHookShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesDeploymentsDeployHookShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->resolveEndpoint())->toBeString();
});
