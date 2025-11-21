<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesDeploymentsDeployHookUpdateRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesDeploymentsDeployHookUpdateRequest(organization: 'test-value', server: 1, site: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesDeploymentsDeployHookUpdateRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesDeploymentsDeployHookUpdateRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesDeploymentsDeployHookUpdateRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersSitesDeploymentsDeployHookUpdateRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->body()->all())->toBeArray();
});
