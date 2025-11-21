<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesDeploymentsPushToDeployStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesDeploymentsPushToDeployStoreRequest(organization: 'test-value', server: 1, site: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesDeploymentsPushToDeployStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesDeploymentsPushToDeployStoreRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesDeploymentsPushToDeployStoreRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersSitesDeploymentsPushToDeployStoreRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->body()->all())->toBeArray();
});
