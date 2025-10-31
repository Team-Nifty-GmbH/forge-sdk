<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesUpdateRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesUpdateRequest(organization: 'test-value', server: 1, site: 1, directory: NULL, pushToDeploy: true, repositoryBranch: NULL);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesUpdateRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesUpdateRequest(organization: 'test-value', server: 1, site: 1, directory: NULL, pushToDeploy: true, repositoryBranch: NULL);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesUpdateRequest(organization: 'test-value', server: 1, site: 1, directory: NULL, pushToDeploy: true, repositoryBranch: NULL);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersSitesUpdateRequest(organization: 'test-value', server: 1, site: 1, directory: NULL, pushToDeploy: true, repositoryBranch: NULL);

    expect($request->body()->all())->toBeArray();
});
