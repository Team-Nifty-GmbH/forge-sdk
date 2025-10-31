<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesDomainsActionsStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesDomainsActionsStoreRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesDomainsActionsStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesDomainsActionsStoreRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesDomainsActionsStoreRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersSitesDomainsActionsStoreRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1);

    expect($request->body()->all())->toBeArray();
});
