<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesEnvironmentShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesEnvironmentShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesEnvironmentShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesEnvironmentShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesEnvironmentShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->resolveEndpoint())->toBeString();
});
