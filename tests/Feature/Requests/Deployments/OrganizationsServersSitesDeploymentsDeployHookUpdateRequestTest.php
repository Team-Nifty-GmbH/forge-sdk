<?php

use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesDeploymentsDeployHookUpdateRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesDeploymentsDeployHookUpdateRequest(organization: 'test-value', server: 1, site: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesDeploymentsDeployHookUpdateRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesDeploymentsDeployHookUpdateRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesDeploymentsDeployHookUpdateRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersSitesDeploymentsDeployHookUpdateRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->body()->all())->toBeArray();
});
