<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesDomainsIndexRequest;
use Saloon\Enums\Method;
use TeamNifty\Forge\Enums\OrganizationsserverssitesdomainsindexFilterstatus;
use TeamNifty\Forge\Enums\OrganizationsserverssitesdomainsindexFiltertype;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesDomainsIndexRequest(organization: 'test-value', server: 1, site: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filterstatus: TeamNifty\Forge\Enums\OrganizationsserverssitesdomainsindexFilterstatus::cases()[0], filtertype: TeamNifty\Forge\Enums\OrganizationsserverssitesdomainsindexFiltertype::cases()[0]);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesDomainsIndexRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesDomainsIndexRequest(organization: 'test-value', server: 1, site: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filterstatus: TeamNifty\Forge\Enums\OrganizationsserverssitesdomainsindexFilterstatus::cases()[0], filtertype: TeamNifty\Forge\Enums\OrganizationsserverssitesdomainsindexFiltertype::cases()[0]);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesDomainsIndexRequest(organization: 'test-value', server: 1, site: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filterstatus: TeamNifty\Forge\Enums\OrganizationsserverssitesdomainsindexFilterstatus::cases()[0], filtertype: TeamNifty\Forge\Enums\OrganizationsserverssitesdomainsindexFiltertype::cases()[0]);

    expect($request->resolveEndpoint())->toBeString();
});
