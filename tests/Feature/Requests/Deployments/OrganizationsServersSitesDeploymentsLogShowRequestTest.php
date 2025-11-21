<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesDeploymentsLogShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesDeploymentsLogShowRequest(organization: 'test-value', server: 1, site: 1, deployment: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesDeploymentsLogShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesDeploymentsLogShowRequest(organization: 'test-value', server: 1, site: 1, deployment: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesDeploymentsLogShowRequest(organization: 'test-value', server: 1, site: 1, deployment: 1);

    expect($request->resolveEndpoint())->toBeString();
});
