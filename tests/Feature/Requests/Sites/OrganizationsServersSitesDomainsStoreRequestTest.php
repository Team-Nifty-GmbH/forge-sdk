<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesDomainsStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesDomainsStoreRequest(organization: 'test-value', server: 1, site: 1, name: 'test-value', allowWildcardSubdomains: true);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesDomainsStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesDomainsStoreRequest(organization: 'test-value', server: 1, site: 1, name: 'test-value', allowWildcardSubdomains: true);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesDomainsStoreRequest(organization: 'test-value', server: 1, site: 1, name: 'test-value', allowWildcardSubdomains: true);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersSitesDomainsStoreRequest(organization: 'test-value', server: 1, site: 1, name: 'test-value', allowWildcardSubdomains: true);

    expect($request->body()->all())->toBeArray();
});
