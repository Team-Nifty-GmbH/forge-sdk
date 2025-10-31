<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesHealthcheckUpdateRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesHealthcheckUpdateRequest(organization: 'test-value', server: 1, site: 1, healthcheckEndpoint: NULL);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesHealthcheckUpdateRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesHealthcheckUpdateRequest(organization: 'test-value', server: 1, site: 1, healthcheckEndpoint: NULL);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesHealthcheckUpdateRequest(organization: 'test-value', server: 1, site: 1, healthcheckEndpoint: NULL);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersSitesHealthcheckUpdateRequest(organization: 'test-value', server: 1, site: 1, healthcheckEndpoint: NULL);

    expect($request->body()->all())->toBeArray();
});
