<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesDomainsStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesDomainsStoreRequest(organization: 'test-value', server: 1, site: 1, name: 'test-value', allowWildcardSubdomains: true);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesDomainsStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesDomainsStoreRequest(organization: 'test-value', server: 1, site: 1, name: 'test-value', allowWildcardSubdomains: true);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesDomainsStoreRequest(organization: 'test-value', server: 1, site: 1, name: 'test-value', allowWildcardSubdomains: true);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersSitesDomainsStoreRequest(organization: 'test-value', server: 1, site: 1, name: 'test-value', allowWildcardSubdomains: true);

    expect($request->body()->all())->toBeArray();
});
