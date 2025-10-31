<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesDomainsUpdateRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesDomainsUpdateRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1, allowWildcardSubdomains: NULL);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesDomainsUpdateRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesDomainsUpdateRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1, allowWildcardSubdomains: NULL);

    expect($request->getMethod())->toBe(Method::PATCH);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesDomainsUpdateRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1, allowWildcardSubdomains: NULL);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersSitesDomainsUpdateRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1, allowWildcardSubdomains: NULL);

    expect($request->body()->all())->toBeArray();
});
