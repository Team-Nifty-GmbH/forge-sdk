<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesDomainsShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesDomainsShowRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesDomainsShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesDomainsShowRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesDomainsShowRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1);

    expect($request->resolveEndpoint())->toBeString();
});
