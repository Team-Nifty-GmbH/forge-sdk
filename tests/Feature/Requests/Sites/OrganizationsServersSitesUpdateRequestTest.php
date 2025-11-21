<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesUpdateRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesUpdateRequest(organization: 'test-value', server: 1, site: 1, directory: null, pushToDeploy: true, repositoryBranch: null);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesUpdateRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesUpdateRequest(organization: 'test-value', server: 1, site: 1, directory: null, pushToDeploy: true, repositoryBranch: null);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesUpdateRequest(organization: 'test-value', server: 1, site: 1, directory: null, pushToDeploy: true, repositoryBranch: null);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersSitesUpdateRequest(organization: 'test-value', server: 1, site: 1, directory: null, pushToDeploy: true, repositoryBranch: null);

    expect($request->body()->all())->toBeArray();
});
