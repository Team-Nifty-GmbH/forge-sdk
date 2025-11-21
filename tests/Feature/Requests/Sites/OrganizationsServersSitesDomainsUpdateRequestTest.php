<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesDomainsUpdateRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesDomainsUpdateRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1, allowWildcardSubdomains: null);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesDomainsUpdateRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesDomainsUpdateRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1, allowWildcardSubdomains: null);

    expect($request->getMethod())->toBe(Method::PATCH);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesDomainsUpdateRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1, allowWildcardSubdomains: null);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersSitesDomainsUpdateRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1, allowWildcardSubdomains: null);

    expect($request->body()->all())->toBeArray();
});
