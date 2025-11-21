<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesHealthcheckUpdateRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesHealthcheckUpdateRequest(organization: 'test-value', server: 1, site: 1, healthcheckEndpoint: null);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesHealthcheckUpdateRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesHealthcheckUpdateRequest(organization: 'test-value', server: 1, site: 1, healthcheckEndpoint: null);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesHealthcheckUpdateRequest(organization: 'test-value', server: 1, site: 1, healthcheckEndpoint: null);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersSitesHealthcheckUpdateRequest(organization: 'test-value', server: 1, site: 1, healthcheckEndpoint: null);

    expect($request->body()->all())->toBeArray();
});
